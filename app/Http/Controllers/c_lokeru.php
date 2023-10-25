<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_loker;
use App\Models\file_loker;
use Auth;

class c_lokeru extends Controller
{
    public function __construct()
    {
        $this->fl = new file_loker();
        $this->dl = new data_loker(); 
    }

    public function index()
    {
        $data = ['dl' => $this->dl->allData()];
        
        return view('loker.index', $data);
    }
    public function detail($id)
    {
        $data = ['dl' => $this->dl->detailData($id)];
        
        return view('loker.detail', $data);
    }
    public function store(Request $request, $id)
    {
        $file  = $request->cv;
        $filename = Auth::user()->id.'_'.$id.'_CV.'.$file->extension();
        $file->move(public_path('cv'),$filename);

        $data = ['id_user' => Auth::user()->id,
                 'id_loker' => $id,
                 'file' => $filename];
        $this->fl->addData($data);
        return redirect()->route('lokeru');
    }
    public function histori()
    {
       $data = ['loker'=> $this->fl->allDataUser()];
       return view('loker.riwayat', $data);
    }
}
