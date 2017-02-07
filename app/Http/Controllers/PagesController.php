<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function lol()
    {
        return redirect('/kidding');
    }

    public function kidding() {
        return view('kidding');
    }
}
