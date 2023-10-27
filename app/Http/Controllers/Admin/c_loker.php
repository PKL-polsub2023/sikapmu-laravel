<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\data_loker;
use App\Models\file_loker;
use Illuminate\Support\Facades\Hash;



class c_loker extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->loker = new data_loker();
        $this->file_loker = new file_loker(); 
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
            'jumlah_pelamar' => 'required',
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
                'jumlah_pelamar' => $request->jumlah_pelamar,
                'foto' => $filename,
            ];
            $this->loker->addData($data);
            return response()->json(['success' => true]);
        }
    
    }

    public function edit(Request $request, $id)
    {
        $data = [
            'loker' => $this->loker->detailData($id),
        ];
       
        return view ('Admin.loker.edit', $data);
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
            'jumlah_pelamar' => 'required',
        ]);
    
        // if ($validator->fails()) {
        //     return response()->json(['success' => false, 'errors' => $validator->errors()]);
        // }else{
        //     if($request->foto <> null){
        //         $file = $request->foto;
        //         $filename = $request->instansi." loker ".$request->judul.".".$file->extension();     
        //         $file->move(public_path('foto/loker'),$filename);
        //         $data = [
        //             'waktu_mulai' => $request->waktu_mulai,
        //             'waktu_akhir' => $request->waktu_akhir,
        //             'judul' => $request->judul,
        //             'instansi' => $request->instansi,
        //             'deskripsi' => $request->deskripsi,
        //             'persyaratan' => $request->persyaratan,
        //             'foto' => $filename,
        //             'jumlah_pelamar' => $request->jumlah_pelamar,
        //         ];
        //     }else{
        //         $data = [
        //             'waktu_mulai' => $request->waktu_mulai,
        //             'waktu_akhir' => $request->waktu_akhir,
        //             'judul' => $request->judul,
        //             'instansi' => $request->instansi,
        //             'deskripsi' => $request->deskripsi,
        //             'persyaratan' => $request->persyaratan,
        //             'jumlah_pelamar' => $request->jumlah_pelamar,
        //         ];
        //     }
        //     $this->loker->editData($id, $data);
        //     return response()->json(['success' => true]);
        // }
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
                'jumlah_pelamar' => $request->jumlah_pelamar,
            ];
        }else{
            $data = [
                'waktu_mulai' => $request->waktu_mulai,
                'waktu_akhir' => $request->waktu_akhir,
                'judul' => $request->judul,
                'instansi' => $request->instansi,
                'deskripsi' => $request->deskripsi,
                'persyaratan' => $request->persyaratan,
                'jumlah_pelamar' => $request->jumlah_pelamar,
            ];
        }
        $this->loker->editData($id, $data);
        return redirect()->route('loker.index');
    }

    public function detail(Request $request, $id)
    {
        $data = [
            'loker' => $this->loker->detailData($id),
        ];
       
        return view ('Admin.loker.detail', $data);
    }

    public function destroy ($id)
    {
        $this->file_loker->deleteLoker($id);
        $this->loker->deleteData($id);
        return redirect()->route('admin.loker.index')->with('success', "Data Berhasil dihapus.");
    }



    
}
