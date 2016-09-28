<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {
        $full = 'Kristian Duba';
        $email = 'fearx@azet.sk';
        return view('pages.about')->with("fullname", $full);
    }

    public function getContact() {
        return view('pages.contact');
    }

}
