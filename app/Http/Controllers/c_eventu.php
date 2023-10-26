<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_event;
use App\Models\file_event;
use Auth;

class c_eventu extends Controller
{
    public function __construct()
    {
        $this->fe = new file_event();
        $this->de = new data_event(); 
    }

    public function index()
    {
        $data = ['de' => $this->de->allData()];
        
        return view('event.index', $data);
    }
    public function detail($id)
    {
        $data = ['de' => $this->de->detailData($id)];
        
        return view('event.detail', $data);
    }
    public function store(Request $request, $id)
    {
        $file  = $request->cv;
        $filename = Auth::user()->id.'_'.$id.'_CVE.'.$file->extension();
        $file->move(public_path('cv'),$filename);

        $data = ['id_user' => Auth::user()->id,
                 'id_event' => $id,
                 'file' => $filename];
        $this->fe->addData($data);
        return redirect()->route('eventu');
    }
    public function histori()
    {
       $data = ['event'=> $this->fe->allDataUser()];
       return view('event.riwayat', $data);
    }
}
