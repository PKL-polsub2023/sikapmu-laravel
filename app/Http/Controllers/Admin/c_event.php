<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\data_event;
use Illuminate\Support\Facades\Hash;



class c_event extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->event = new data_event();
    }

    public function index()
    {
        
        $data = [
            'event' => $this->event->allData(),
        ];

        return view ('Admin.eventt.index', $data);
    }

    public function create()
    {
        return view ('Admin.eventt.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'waktu_event' => 'required',
            'kategori' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required',
            'foto' => 'required',
            'jumlah_pendaftar' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }else{
            $file = $request->foto;
            $filename = $request->instansi." event ".$request->judul.".".$file->extension();     
            $file->move(public_path('foto/event'),$filename);
            $data = [
                'waktu_event' => $request->waktu_event,
                'kategori' => $request->kategori,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'persyaratan' => $request->persyaratan,
                'jumlah_pendaftar' => $request->jumlah_pendaftar,
                'foto' => $filename,
            ];
            $this->event->addData($data);
            return response()->json(['success' => true]);
        }
    
    }

    public function edit(Request $request, $id)
    {
        $data = [
            'event' => $this->event->detailData($id),
        ];
       
        return view ('Admin.eventt.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'waktu_event' => 'required',
            'kategori' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
            'persyaratan' => 'required',
            'foto' => 'required',
            'jumlah_pendaftar' => 'required',
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
            $filename = $request->instansi." event ".$request->judul.".".$file->extension();     
            $file->move(public_path('foto/event'),$filename);
            $data = [
                'waktu_event' => $request->waktu_event,
                'kategori' => $request->kategori,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'persyaratan' => $request->persyaratan,
                'jumlah_pendaftar' => $request->jumlah_pendaftar,
                'foto' => $filename,
            ];
        }else{
            $data = [
                'waktu_event' => $request->waktu_event,
                'kategori' => $request->kategori,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'persyaratan' => $request->persyaratan,
                'jumlah_pendaftar' => $request->jumlah_pendaftar,
            ];
        }
        $this->event->editData($id, $data);
        return redirect()->route('event.index');
    }

    public function detail(Request $request, $id)
    {
        $data = [
            'event' => $this->event->detailData($id),
        ];
       
        return view ('Admin.eventt.detail', $data);
    }

    
}
