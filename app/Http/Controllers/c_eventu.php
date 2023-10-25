<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_event;
use App\Models\file_event;

class c_eventu extends Controller
{
    public function __construct()
    {
        $this->fl = new file_event();
        $this->dl = new data_event(); 
    }

    public function index()
    {
        $data = ['dl' => $this->dl->allData()];
        
        return view('event.index', $data);
    }
    public function detail($id)
    {
        $data = ['dl' => $this->dl->detailData($id)];
        
        return view('event.detail', $data);
    }
    public function store(Request $request, $id)
    {
        $file  = $request->cv;
        $filename = Auth::user()->id.'_'.$id.'_CV.'.$file->extension();
        $file->move(public_path('cv'),$filename);

        $data = ['id_user' => Auth::user()->id,
                 'id_event' => $id,
                 'file' => $filename];
        $this->fl->addData($data);
        return redirect()->route('eventu');
    }
    public function histori()
    {
       $data = ['event'=> $this->fl->allDataUser()];
       return view('event.riwayat', $data);
    }
}
