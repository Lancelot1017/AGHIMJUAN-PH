<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about_us() {
        return view('about_us');
    }

    public function blog() {
        return view('blog');
    }

    public function contact() {
        return view('contact');
    }

    public function feature_project() {
        return view('feature_project');
    }

    public function latest_project() {
        return view('latest_project');
    }
}
