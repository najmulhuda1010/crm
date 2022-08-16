<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplainListContoller extends Controller
{
    public function complainList()
    {
        return view('pages.complainList');
    }

    public function complainDetails()
    {
        return view('pages.complainDetails');
    }
}
