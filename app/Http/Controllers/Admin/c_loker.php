<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\data_loker;
use App\Models\file_loker;
use Illuminate\Support\Facades\Hash;
use DB;



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
        $jumlahLoker = $this->loker->allData();

        foreach ($jumlahLoker as $data) {
            $Kouta = $data->jumlah_pelamar;
            $totalPelamar = DB::table('file_lokers')->where('id_loker', $data->id_loker)->count();
            $persentase = ($totalPelamar/$Kouta)*100;
            if($persentase > 100)
            {
                $data->persentase_pelamar = 100;
            }else{
                $data->persentase_pelamar = $persentase;
            }
        }
        
        $data = [
            'loker' => $jumlahLoker,
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
            'foto' => 'required|file|mimes:jpeg,jpg,png|max:2056',
            'jumlah_pelamar' => 'required|numeric|min:1',
        ],[
            'waktu_mulai.required' => "Waktu Mulai Wajib Diisi.",
            'waktu_akhir.required' => "Waktu Akhir Wajib Diisi.",
            'judul.required' => "Judul Wajib Diisi.",
            'instansi.required' => "Instansi Wajib Diisi.",
            'deskripsi.required' => "Deskripsi Wajib Diisi.",
            'persyaratan.required' => "Persyaratan Wajib Diisi.",
            'foto.required' => "Foto Wajib Diisi.",
            'foto.mimes' => "Format Foto harus JPEG, JPG atau PNG.",
            'jumlah_pelamar' => "Kouta Pelamar Minimal 1",
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
            'foto' => 'file|mimes:jpeg,jpg,png|max:2056',
            'jumlah_pelamar' => 'required|numeric|min:1',
        ],[
            'waktu_mulai.required' => "Waktu Mulai Wajib Diisi.",
            'waktu_akhir.required' => "Waktu Akhir Wajib Diisi.",
            'judul.required' => "Judul Wajib Diisi.",
            'instansi.required' => "Instansi Wajib Diisi.",
            'deskripsi.required' => "Deskripsi Wajib Diisi.",
            'persyaratan.required' => "Persyaratan Wajib Diisi.",
            'foto.mimes' => "Format Foto harus JPEG, JPG atau PNG.",
            'jumlah_pelamar' => "Kouta Pelamar Minimal 1",
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
        $data_loker = $this->loker->detailData($id);
        $file_loker = $this->file_loker->allDataLoker($id);
        foreach ($file_loker as $data) {
            $user = DB::table('users')->where('id', $data->id_user)->first();
            $data->user = $user;
        }
       
   
        $data = [
            'loker' => $data_loker,
            'pelamar' => $file_loker,
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
