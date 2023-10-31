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
use App\Models\data_berita;
use App\Models\data_ads;
use App\Models\data_ketua_okp;
use App\Models\data_sekretaris_okp;
use App\Models\data_bendahara_okp;
use App\Models\data;

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
        $this->berita = new data_berita();
        $this->ads = new data_ads();
        $this->ketua = new data_ketua_okp();
        $this->sekretaris = new data_sekretaris_okp();
        $this->bendahara = new data_bendahara_okp();
        $this->data = new data();
        }

    public function index()
    {
        $event = $this->file_event->allDataUser();
        $jevent = count($event);
        $loker =  $this->file_loker->allDataUser();
        $jloker = count($loker);
        $okp = $this->okp->allData();
        $jokp = count($okp);
        $pelopor = $this->pemuda_pelopor->allData();
        $jpelopor = count($pelopor);
        $wirausaha = $this->wirausaha->allData();
        $jwirausaha = count($wirausaha);
        $usaha =  $this->data_usaha->allData();
        $jusaha = count($usaha);
        $umum = $this->user_umum->allData();
        $jumum = count($umum);
        $berita = $this->berita->allData();
        $jberita = count($berita);
        $ads = $this->ads->allData();
        $jads = count($ads);
       if(Auth::user()->role == "Admin")
       {
        $data = [
            'event' => $jevent,
            'usaha' => $jusaha,
            'okp' => $jokp,
            'pelopor' => $jpelopor,
            'wirausaha' => $jwirausaha,
            'umum' => $jumum,
            'loker' => $jloker,
            'berita' => $jberita,
            'ads' => $jads,
        ];
        return view ('Admin.dashboard', $data);
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
            'event' => $jevent,
            'loker' => $jloker,
        ];
        return view ('umum.dashboard', $data);
       }elseif(Auth::user()->role == "pp"){
        $data = [
            'user' => $this->pemuda_pelopor->detailData(Auth::user()->id),
            'event' => $jevent,
            'loker' => $jloker,
        ];
        return view ('pelopor.dashboard', $data);
       }
       elseif(Auth::user()->role == "okp"){
        $data = [
            'user' => $this->okp->detailData(Auth::user()->id),
            'event' => $jevent,
        ];
        return view ('okp.dashboard', $data);
       }
    }

    public function detail($jenis, $id)
    {
        $dataPendukung = $this->data->dataPendukung($id);
        if($jenis == "wiramuda")
        {
            $data = [
                'user' => $this->wirausaha->detailData($id),
                'usaha' => $this->data_usaha->DetailDatau($id),
                'pendukung' => $dataPendukung,
            ];
            return view ('Admin.wiramuda.detail', $data);
        }else if ($jenis == "umum")
        {
            $data = [
                'user' => $this->user_umum->detailData($id),
                'pendukung' => $dataPendukung,
            ];
            return view ('Admin.umum.detail', $data);
        }else if ($jenis == "okp")
        {
            $cari = $this->okp->detailData($id);
            $ambilKetua = $this->ketua->getNama($cari->id_ket_umum);
            $ambilSekretaris = $this->sekretaris->getNama($cari->id_skre_umum);
            $ambilBendahara = $this->bendahara->getNama($cari->id_bend_umum);
            $data = [
                'user' => $this->okp->detailData($id),
                'ketua' => $ambilKetua,
                'bendahara' => $ambilBendahara,
                'sekretaris' => $ambilSekretaris,
                'pendukung' => $dataPendukung,
            ];
            return view ('Admin.okp.detail', $data);
        }else if ($jenis == "pelopor")
        {
            $data = [
                'user' => $this->pemuda_pelopor->detailData($id),
                'pendukung' => $dataPendukung,
            ];
            return view ('Admin.pelopor.detail', $data);
        }
    }
}
