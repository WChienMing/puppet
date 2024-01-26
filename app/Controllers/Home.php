<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('template/header')
            . view('index')
            . view('template/footer');
    }

    public function roadmap()
    {
        return view('template/header')
            . view('roadmap')
            . view('template/footer');
    }

    public function faq()
    {
        return view('template/header')
            . view('faq')
            . view('template/footer');
    }

    public function about()
    {
        return view('template/header')
            . view('about')
            . view('template/footer');
    }

    public function gallery()
    {
        return view('template/header')
            . view('gallery')
            . view('template/footer');
    }
}
