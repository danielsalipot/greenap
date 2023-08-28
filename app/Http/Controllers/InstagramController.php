<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class InstagramController extends Controller
{
    public function instagramRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithInstagram()
    {
        $client = new Client();
        try {
            // user has user access token
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();

            // use user access token to get page accounts which has page access token
            $pageAccessTokenResponse = $client->request('GET', "https://graph.facebook.com/v17.0/me?fields=instagram_business_account&access_token=$user->token");
            $pageAccessTokenData = json_decode($pageAccessTokenResponse->getBody(), true)['accounts']['data'][0];

            dd($pageAccessTokenData);

            // // use page access token to get post from account
            // $postsResponse = $client->request('GET', "https://graph.facebook.com/{$pageAccessTokenData['id']}/posts?fields=id,full_picture,message,created_time,attachments&access_token={$pageAccessTokenData['access_token']}");
            // $postsData = json_decode($postsResponse->getBody(), true);
            // $posts = $postsData['data']; // Array of posts
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
