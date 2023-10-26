<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_pemuda;
use App\Models\data_loker;
use App\Models\data_event;
use App\Models\data_berita;
use App\Models\wirausaha;
use App\Models\file_event;
use App\Models\file_loker;
use App\Models\data_usaha;
use App\Models\pemuda_pelopor;
use Str;

class c_landing_page extends Controller
{
    public function __construct()
    {
        $this->pp = new pemuda_pelopor();
        $this->dp = new data_pemuda();
        $this->dl = new data_loker();
        $this->de = new data_event();
        $this->db = new data_berita();
        $this->wm = new wirausaha();
        $this->file_event = new file_event();
        $this->file_loker = new file_loker();
        $this->data_usaha = new data_usaha();
    }

    public function home()
    {
        $data = ['dp' => $this->dp->allData(),
                 'loker' => $this->dl->allData(),
                 'event' => $this->de->allData(),
                 'pemuda' => $this->pp->allData(),
                 'berita' => $this->db->allData()
                
                ];

                 foreach ($data['event'] as &$event) { 
                    $event->deskripsi = Str::limit($event->deskripsi, '25');
                }
        
                foreach ($data['berita'] as &$berita) { 
                    $berita->isi = Str::limit($berita->isi, '25');
                }
        return view('pages.laravel-examples.landingpage', $data);
    }
    public function lwm()
    {
        $data = ['wm' => $this->wm->allDatap()];
        return view('pages.laravel-examples.landingwm', $data);
    }
    public function wirausahadetail($id)
    {
        $sekarang = date('Y');
        $data = ['wm' => $this->wm->detailData($id),
                 'event' => $this->file_event->DetailDatau($id),
                 'usaha' => $this->data_usaha->DetailDatau($id),
                 'j' => $this->dp->tahunData($sekarang),
    ];
        return view('pages.laravel-examples.detailwm', $data);
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
        return view ('landingPage.loker.index', $data);
    }

    public function lokerDetail($id)
    {
        $data = [
            'loker' => $this->dl->detailData($id),
        ];
        return view ('landingPage.loker.detail', $data);
    }

    public function event()
    {
        $data = [
            'event' => $this->de->paginate(),
        ];
        foreach ($data['event'] as &$event) { 
            $event->deskripsi = Str::limit($event->deskripsi, '25');
        }
        return view ('landingPage.event.index', $data);
    }

    public function eventDetail($id)
    {
        $data = [
            'event' => $this->de->detailData($id),
        ];
        return view ('landingPage.event.detail', $data);
    }

    public function pemuda()
    {
        $data = [
            'pelopor' => $this->pp->paginate(),
        ];

        
        return view ('landingPage.pemuda.index', $data);
    }

    public function pemudaDetail($id)
    {
        $data = [
            'pelopor' => $this->pp->detailData($id),
        ];
        return view ('landingPage.pemuda.detail', $data);
    }
}
