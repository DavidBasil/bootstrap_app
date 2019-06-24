<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function colors(){
        return view('colors');
    }

    public function typography(){
        return view('typography');
    }

    public function container(){
        return view('container');
    }

    public function grid(){
        return view('grid');
    }

    public function padding_margin(){
        return view('padding_margin');
    }
}
