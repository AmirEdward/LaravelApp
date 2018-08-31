<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index()
    {
        $title = 'Welcome to laravel';
        $message = 'This is the home page of the app';
//        return view('pages.index', compact('title', 'message'));
        return view('pages.index')->with(array(
            'title' => $title,
            'message' => $message
        ));
    }

    public function about()
    {
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = [
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        ];
        return view('pages.services')->with($data);
    }
}
