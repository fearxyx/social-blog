<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('pages.welcome');
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
