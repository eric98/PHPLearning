<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('home');
//        require 'app/views/home.view.php';
    }

    public function news()
    {
        return view('news');
//
//        require 'app/views/news.view.php';
    }

    public function contact()
    {
        return view('contact');
//
//        require 'app/views/contact.view.php';
    }

    public function about()
    {
        return view('about');
//
//        require 'app/views/about.view.php';
    }
}