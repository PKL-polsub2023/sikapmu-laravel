<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_pemuda;
use App\Models\data_loker;
use App\Models\data_event;
use App\Models\data_berita;
use App\Models\wirausaha;

class c_landing_page extends Controller
{
    public function __construct()
    {
        $this->dp = new data_pemuda();
        $this->dl = new data_loker();
        $this->de = new data_event();
        $this->db = new data_berita();
        $this->wm = new wirausaha();
    }

    public function home()
    {
        $data = ['dp' => $this->dp->allData(),
                 'loker' => $this->dl->allData(),
                 'event' => $this->de->allData(),
                 'berita' => $this->db->allData()];
        return view('pages.laravel-examples.landingpage', $data);
    }
    public function lwm()
    {
        $sekarang = date("Y");
        $data = ['wm' => $this->wm->allDatap(),
                 'j' => $this->dp->tahunData($sekarang)];
        return view('pages.laravel-examples.landingwm', $data);
    }
    public function chart($id)
    {
        $dp = $this->dp->tahunData($id);
   
        $data[0] = $dp->pemuda_satu;
        $data[1] = $dp->pemuda_dua;
        $data[2] = $dp->penc_kerja;
        $data[3] = $dp->pas_hiv;
        $data[4] = $dp->oat_hiv;
        $data[5] = $dp->wira_usaha_muda;
        $data[6] = $dp->angota_okp;
        $data[7] = $dp->jum_okp;
        $data[8] = $dp->curanmor;
        $data[9] = $dp->narkoba;
        $data[10] = $dp->pembunuhan;
        $data[11] = $dp->osis;
        $data[12] = $dp->bem;

        return $data;
    }

    public function loker()
    {
        $data = [
            'loker' => $this->dl->paginate(),
        ];
        return view ('landingPage.loker', $data);
    }
}
