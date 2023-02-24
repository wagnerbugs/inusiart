<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    public function index()
    {
        return view('site.environment.about');
    }

    public function services()
    {
        return view('site.environment.services');
    }

    public function partners()
    {
        return view('site.environment.partners');
    }
}
