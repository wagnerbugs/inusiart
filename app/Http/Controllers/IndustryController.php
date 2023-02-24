<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index()
    {
        return view('site.industry.about');
    }

    public function services()
    {
        return view('site.industry.services');
    }

    public function faq()
    {
        return view('site.industry.faq');
    }

    public function partners()
    {
        return view('site.industry.partners');
    }
}
