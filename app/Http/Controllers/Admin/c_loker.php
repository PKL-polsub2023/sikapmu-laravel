<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\data_loker;
use Illuminate\Support\Facades\Hash;



class c_loker extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->loker = new data_loker();
    }

    public function index()
    {
        
        $data = [
            'loker' => $this->loker->allData(),
        ];

        return view ('Admin.loker.index', $data);
    }

    public function create()
    {
        return view ('Admin.loker.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'waktu_mulai' => 'required',
            'waktu_akhir' => 'required',
            'judul' => 'required',
            'instansi' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required',
            'foto' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }else{
            $file = $request->foto;
            $filename = $request->instansi." loker ".$request->judul.".".$file->extension();     
            $file->move(public_path('foto/loker'),$filename);
            $data = [
                'waktu_mulai' => $request->waktu_mulai,
                'waktu_akhir' => $request->waktu_akhir,
                'judul' => $request->judul,
                'instansi' => $request->instansi,
                'deskripsi' => $request->deskripsi,
                'persyaratan' => $request->persyaratan,
                'foto' => $filename,
            ];
            $this->loker->addData($data);
            return response()->json(['success' => true]);
        }
    
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'waktu_mulai' => 'required',
            'waktu_akhir' => 'required',
            'judul' => 'required',
            'instansi' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required',
            'foto' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }else{
            if($request->foto <> null){
                $file = $request->foto;
                $filename = $request->instansi." loker ".$request->judul.".".$file->extension();     
                $file->move(public_path('foto/loker'),$filename);
                $data = [
                    'waktu_mulai' => $request->waktu_mulai,
                    'waktu_akhir' => $request->waktu_akhir,
                    'judul' => $request->judul,
                    'instansi' => $request->instansi,
                    'deskripsi' => $request->deskripsi,
                    'persyaratan' => $request->persyaratan,
                    'foto' => $filename,
                ];
            }else{
                $data = [
                    'waktu_mulai' => $request->waktu_mulai,
                    'waktu_akhir' => $request->waktu_akhir,
                    'judul' => $request->judul,
                    'instansi' => $request->instansi,
                    'deskripsi' => $request->deskripsi,
                    'persyaratan' => $request->persyaratan,
                ];
            }
            $this->loker->editData($id, $data);
            return response()->json(['success' => true]);
        }
    }
    
}
