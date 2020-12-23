<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To My Webpage!';
        //return view('pages.index', compact('title')); method 1
        return view('pages.index')->with('title',$title); //method 2
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title',$title); //method 2
    }

    public function kelompok(){
        $data = array(
            'title' => 'Anggota Kelompok',
            'kelompok' => ['Marsya','Erik','Jose','Lusi','Kotz']
        );
        return view('pages.kelompok') -> with($data);
    }
}
