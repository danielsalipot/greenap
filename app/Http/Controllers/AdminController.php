<?php

namespace App\Http\Controllers;

use App\Models\FacebookData;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = FacebookData::first('posts');
        $posts = Json::decode($data["posts"]);
        return view('admin.dashboard', ['posts' => $posts]);
    }

    public function login()
    {
    }
}
