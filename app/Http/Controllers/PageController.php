<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        return view('product');
    }

    public function services()
    {
        return view('services');
    }

    public function process()
    {
        return view('process');
    }

    public function compliance()
    {
        return view('compliance');
    }

    public function sectors()
    {
        return view('sectors');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }
}