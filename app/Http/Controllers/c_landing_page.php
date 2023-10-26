<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_pemuda;

class c_landing_page extends Controller
{
    public function __construct()
    {
        $this->dp = new data_pemuda();
    }

    public function home()
    {
        $data = ['dp' => $this->dp->allData()];
        return view('pages.laravel-examples.landingpage', $data);
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
}
