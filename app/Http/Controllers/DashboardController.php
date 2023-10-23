<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\wirausaha;
use App\Models\m_user;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->wirausaha = new wirausaha();
    }

    public function index()
    {
       if(Auth::user()->role == "Admin")
       {
        return view ('Admin.dashboard');
       }elseif(Auth::user()->role == "wm")
       {
        $data = [
            'wirausaha' => $this->wirausaha->detailData(Auth::user()->id),
        ];
        return view ('Wiramuda.dashboard', $data);
       }elseif(Auth::user()->role == "umum"){
        return view ('umum.dashboard');
       }
    }
}
