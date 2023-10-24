<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\wirausaha;
use App\Models\pemuda_pelopor;
use App\Models\user_umum;
use App\Models\m_user;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->pemuda_pelopor = new pemuda_pelopor();
        $this->user_umum = new user_umum();
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
       }elseif(Auth::user()->role == "uu"){
        $data = [
            'user' => $this->user_umum->detailData(Auth::user()->id),
        ];
        return view ('umum.dashboard', $data);
       }elseif(Auth::user()->role == "pp"){
        $data = [
            'user' => $this->pemuda_pelopor->detailData(Auth::user()->id),
        ];
        return view ('pelopor.dashboard', $data);
       }
    }
}
