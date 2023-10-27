<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\data_berita;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;



class c_berita extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->berita = new data_berita();
    }

    public function index()
    {
        
        $data = [
            'berita' => $this->berita->allData(),
        ];

        return view ('Admin.berita.index', $data);
    }

    public function create()
    {
        return view ('Admin.berita.create');
    }

    public function store(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d');
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'kategori' => 'required',
            'isi' => 'required',
            'foto' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }else{
            $file = $request->foto;
            $filename = "berita".$request->judul.".".$file->extension();     
            $file->move(public_path('foto/berita'),$filename);
            $data = [
                'kategori' => $request->kategori,
                'judul' => $request->judul,
                'isi' => $request->isi,
                'foto' => $filename,
                'upload' => $now,
            ];
            $this->berita->addData($data);
            return response()->json(['success' => true]);
        }
    
    }

    public function edit(Request $request, $id)
    {
        $data = [
            'berita' => $this->berita->detailData($id),
        ];
       
        return view ('Admin.berita.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $now = Carbon::now()->format('Y-m-d');
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'kategori' => 'required',
            'isi' => 'required',
            'foto' => 'required',
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
            $filename = $request->instansi." berita ".$request->judul.".".$file->extension();     
            $file->move(public_path('foto/berita'),$filename);
            $data = [
                'kategori' => $request->kategori,
                'judul' => $request->judul,
                'isi' => $request->isi,
                'foto' => $filename,
                'upload' => $now,
            ];
        }else{
            $data = [
                'kategori' => $request->kategori,
                'judul' => $request->judul,
                'isi' => $request->isi,
                'upload' => $now,
            ];
        }
        $this->berita->editData($id, $data);
        return redirect()->route('berita.index');
    }

    public function detail(Request $request, $id)
    {
        $data = [
            'berita' => $this->berita->detailData($id),
        ];
       
        return view ('Admin.berita.detail', $data);
    }

    public function destroy ($id)
    {
        $this->berita->deleteData($id);
        return redirect()->route('event.index')->with('success', "Data Berhasil dihapus.");
    }




    
}
