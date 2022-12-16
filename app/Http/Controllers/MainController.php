<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function userPost()
    {
        $posts = Post::all()->skip(5)->take(5);
        // return $posts;
        // $data['user'] = User::all();
        // return $user;
        $data['user'] = User::with('posts')->get();
        // $user = new User();
        // $user->name = "Sajol karmakar";
        // $user->email = "sajol1515@gmail.com";
        // $user->password = Hash::make('password');
        // $user->save();
        return view('post',$data);
    }

    public function postForm()
    {
        // 
    }
}
