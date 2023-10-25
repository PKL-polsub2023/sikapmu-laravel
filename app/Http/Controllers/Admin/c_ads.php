<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\data_ads;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use DB;



class c_ads extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->ads = new data_ads();
    }

    public function index()
    {
        
        $data = [
            'ads' => $this->ads->allData(),
        ];

        return view ('Admin.ads.index', $data);
    }

    public function create()
    {
        return view ('Admin.ads.create');
    }

    public function store(Request $request)
    {
        $now = Carbon::now()->format('Y-m-d');
        $idAds = DB::table('data_ads')->max('id_ads');
        if($idAds <> null)
        {
            $id = $idAds + 1;
        }else{
            $id = 1;
        }

        $validator = Validator::make($request->all(), [
            'foto' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }else{
            $file = $request->foto;
            $filename = "ads".$now.".".$file->extension();     
            $file->move(public_path('foto/ads'),$filename);
            $data = [
                'foto' => $filename,
                'id_ads' => $id,
            ];
            $this->ads->addData($data);
            return response()->json(['success' => true]);
        }
    
    }

    public function edit(Request $request, $id)
    {
        $data = [
            'ads' => $this->ads->detailData($id),
        ];
       
        return view ('Admin.ads.edit', $data);
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
            $filename = $request->instansi." ads ".$request->judul.".".$file->extension();     
            $file->move(public_path('foto/ads'),$filename);
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
        $this->ads->editData($id, $data);
        return redirect()->route('ads.index');
    }

    public function detail(Request $request, $id)
    {
        $data = [
            'ads' => $this->ads->detailData($id),
        ];
       
        return view ('Admin.ads.detail', $data);
    }

    public function destroy ($id)
    {
        $this->ads->deleteData($id);
    }




    
}
