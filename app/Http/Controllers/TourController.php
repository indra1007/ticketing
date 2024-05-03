<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    public function tour()
    {
        return view('tour');
    }
    public function tourdetail()
    {
        return view('tourdetail');
    }
}
