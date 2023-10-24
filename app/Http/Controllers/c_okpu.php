<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\okp;
use App\Models\data;
use Auth;

class c_okpu extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->okp = new okp();
        $this->data = new data();
    }

    //masuk menu updaet bio
    public function bio()
    {
        $data = ['user' => $this->pp->detailData(Auth::user()->id)];
        return view('pelopor/bio/index', $data);
    }

    //mengubah bio
    public function updatebio(Request $request)
    {
        $id = Auth::user()->id;
        $data = [
            'nama' => $request->nama,
            'kontak' => $request->kontak,
        ];
        $this->user->editData($id, $data);
        $ttl = $request->t.", ".$request->tl;
        $data = [
            'ttl' => $ttl,
            'agama' => $request->agama,
            'pendidikan_akhir' => $request->pendidikan,
            'alamat' => $request->alamat,
            'kode_pos' => $request->pos,
            'status_nikah' => $request->pernikahan,
            'data_keluarga' => $request->keluarga,
        ];
        $this->pp->editData($id, $data);
        if ($request->foto <> null) {
            $file  = $request->foto;
            $filename = 'pelopor_'.$id.'.'.$file->extension();
            $file->move(public_path('foto/pelopor'),$filename);
            $data = ['foto' => $filename];
            $this->pp->editData($id, $data);
        }
        return redirect()->route('pelopor.bio');
    }
}
