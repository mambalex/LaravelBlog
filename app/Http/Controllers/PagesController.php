<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel App!';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'This is ABOUT page';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = [
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        ];
        return view('pages.services')->with($data);
    }
}
