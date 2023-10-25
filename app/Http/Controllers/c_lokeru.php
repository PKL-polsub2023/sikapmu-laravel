<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_loker;

class c_lokeru extends Controller
{
    public function __construct()
    {
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
}
