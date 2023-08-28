<?php

namespace App\Http\Controllers;

use App\Models\FacebookData;
use App\Models\User;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // facebook login call back
    public function loginWithFacebook()
    {
        $client = new Client();
        try {
            // user has user access token
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();

            // use user access token to get page accounts which has page access token
            $pageAccessTokenResponse = $client->request('GET', "https://graph.facebook.com/v17.0/me?fields=accounts&access_token=$user->token");
            $pageAccessTokenData = json_decode($pageAccessTokenResponse->getBody(), true)['accounts']['data'][0];

            // use page access token to get post from account
            $postsResponse = $client->request('GET', "https://graph.facebook.com/{$pageAccessTokenData['id']}/posts?fields=id,full_picture,message,created_time,attachments&access_token={$pageAccessTokenData['access_token']}");
            $postsData = json_decode($postsResponse->getBody(), true);
            $posts = $postsData['data']; // Array of posts

            FacebookData::updateOrCreate(
                [
                    'page_id' => $pageAccessTokenData['id']
                ],
                [
                    'page_id' => $pageAccessTokenData['id'],
                    'token' => $pageAccessTokenData['access_token'],
                    'posts' => Json::encode($posts),
                ]
            );

            if ($isUser) {
                Auth::login($isUser);
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => encrypt('password')
                ]);

                Auth::login($createUser);
            }

            return redirect('/admin/dashboard');
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }

    public function refreshData()
    {
        $client = new Client();
        $data = FacebookData::first();

        // use page access token to get post from account
        $postsResponse = $client->request('GET', "https://graph.facebook.com/{$data->page_id}/posts?fields=id,full_picture,message,created_time,attachments&access_token={$data->token}");
        $postsData = json_decode($postsResponse->getBody(), true);

        $posts = $postsData['data']; // Array of posts

        FacebookData::first()->update([
            'posts' => Json::encode($posts),
        ]);

        return redirect()->back();
    }
}
