<?php

namespace App\Http\Controllers\Wiramuda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class c_bio extends Controller
{
    public function index(){
        
        
        $fullName = Auth::user()->nama; 
        $namaParts = explode(' ', $fullName);
        $user->namaDepan = $namaParts[0];
        $user->namaBelakang = implode(' ', array_slice($namaParts, 1));
        dd($user->namaDepan);
        return view('Wiramuda.bio.index');
    }
}
