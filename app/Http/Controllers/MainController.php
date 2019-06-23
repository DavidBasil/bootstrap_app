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
}
