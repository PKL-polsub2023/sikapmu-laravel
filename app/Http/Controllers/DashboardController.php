<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\wirausaha;
use App\Models\pemuda_pelopor;
use App\Models\user_umum;
use App\Models\m_user;
use App\Models\file_event;
use App\Models\file_loker;
use App\Models\data_usaha;
use App\Models\okp;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->pemuda_pelopor = new pemuda_pelopor();
        $this->user_umum = new user_umum();
        $this->okp = new okp();
        $this->wirausaha = new wirausaha();
        $this->file_event = new file_event();
        $this->file_loker = new file_loker();
        $this->data_usaha = new data_usaha();
    }

    public function index()
    {
        $event = $this->file_event->allDataUser();
        $jevent = count($event);
        $loker =  $this->file_loker->allDataUser();
        $jloker = count($loker);
       if(Auth::user()->role == "Admin")
       {
        return view ('Admin.dashboard');
       }elseif(Auth::user()->role == "wm")
       {
        $usaha =  $this->data_usaha->allData();
        $jusaha = count($usaha);
        $data = [
            'wirausaha' => $this->wirausaha->detailData(Auth::user()->id),
            'event' => $jevent,
            'usaha' => $jusaha,
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
       elseif(Auth::user()->role == "okp"){
        $data = [
            'user' => $this->okp->detailData(Auth::user()->id),
        ];
        return view ('okp.dashboard', $data);
       }
    }
}
