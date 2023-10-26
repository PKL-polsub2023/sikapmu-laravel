<?php

namespace App\Http\Controllers\Wiramuda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\m_user;
use App\Models\wirausaha;
use App\Models\usaha;

class c_bio extends Controller
{

    public function __construct()
    {
        $this->user = new m_user();
        $this->wirausaha = new wirausaha();
        $this->usaha = new usaha();
    }

    public function index()
    {
        $fullName = Auth::user()->nama; 
        $namaParts = explode(' ', $fullName);
        $namaDepan = $namaParts[0];
        $namaBelakang = implode(' ', array_slice($namaParts, 1));
        
        $data = [
            'namaDepan' => $namaDepan,
            'namaBelakang' => $namaBelakang,
            'wirausaha' => $this->wirausaha->detailData(Auth::user()->id),
        ];
        return view('Wiramuda.bio.index', $data);
    }

    public function usaha()
    {
        $data = ['du' => $this->usaha->allData()];
        return view('Wiramuda.bio.daftar', $data);
    }

    public function updateBio(Request $request)
    {
        $id = Auth::user()->id;
        
        if($request->foto == null)
        {
            $data1 = [
                'ttl' => $request->ttl,
                'umur' => $request->umur,
                'nama_wirausaha' => $request->nama_wirausaha,
                'alamat' => $request->alamat,
            ];
            
        }else{
            $file = $request->foto;
            $filename = $id."foto".".".$file->extension();     
            $file->move(public_path('foto/wiramuda'),$filename);
            $data1 = [
                'ttl' => $request->ttl,
                'umur' => $request->umur,
                'nama_wirausaha' => $request->nama_wirausaha,
                'alamat' => $request->alamat,
                'foto' => $filename,
            ];
        }

        $data2 = [
            'nama' => $request->namaDepan. " ". $request->namaBelakang,
            'email' => $request->email,
            'kontak' => $request->kontak,
        ];

        $this->user->editData($id, $data2);
        $this->wirausaha->editData($id, $data1);

        return redirect()->route('wiramuda.bio')->with('success','Update Bio Berhasil');
    }
}
