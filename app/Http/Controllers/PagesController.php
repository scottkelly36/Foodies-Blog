<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to the app!';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title'=> 'Services',
            'services'=> ['Share Recipes', 'disscus with friends', 'Help others Learn', 'discover more!']

        );
        return view('pages.services')->with($data);
    }
}
