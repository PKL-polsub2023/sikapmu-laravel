<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_lokeru extends Controller
{
    public function index()
    {
        return view('loker.index');
    }
}