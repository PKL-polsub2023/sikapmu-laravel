<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\okp;
use App\Models\data_ketua_okp;
use App\Models\data_bendahara_okp;
use App\Models\data_sekretaris_okp;

use Auth;

class c_okpu extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->okp = new okp();
        $this->data_bendahara_okp = new data_bendahara_okp();
        $this->data_sekretaris_okp = new data_sekretaris_okp();
        $this->data_ketua_okp = new data_ketua_okp();
    }
    //landingpage
    public function index()
    {
        $data = ['user'];
    }

    //masuk menu updaet bio
    public function bio()
    {
        $data = ['user' => $this->okp->detailData(Auth::user()->id)];
        return view('okp/bio/index', $data);
    }
    public function dlainya()
    {
        $data = ['user' => $this->okp->detailData(Auth::user()->id)];
        return view('okp/bio/lainya', $data);
    }
    public function dketua()
    {
        $okp = $this->okp->detailData(Auth::user()->id);
        $data = ['user' => $this->data_ketua_okp->detailData($okp->id_ket_umum)];
       
        return view('okp/bio/ketua', $data);
    }

    public function uketua(Request $request)
    {
        $okp = $this->okp->detailData(Auth::user()->id);
        $ttl = $request->t.", ".$request->tl;
        $data = [

            'email' => $request->email,
            'nama_ketua' => $request->nama_ketua,
            'ttl' => $ttl,
            'agama' => $request->agama,
            'jenkel' => $request->jenkel,
            'pendidikan_akhir' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'kontak'=>$request->kontak
            
        ];
        $this->data_ketua_okp->editData($okp->id_ket_umum, $data);
        return redirect()->route('okp.dketua');
    }

    public function dsekretaris()
    {
        $okp = $this->okp->detailData(Auth::user()->id);
        $data = ['user' => $this->data_sekretaris_okp->detailData($okp->id_skre_umum)];
       
        return view('okp/bio/sekretaris', $data);
    }

    public function usekretaris(Request $request)
    {
        $okp = $this->okp->detailData(Auth::user()->id);
        $ttl = $request->t.", ".$request->tl;
        $data = [

            'email' => $request->email,
            'nama_skre' => $request->nama_skre,
            'ttl' => $ttl,
            'agama' => $request->agama,
            'jenkel' => $request->jenkel,
            'pendidikan_akhir' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'kontak'=>$request->kontak
            
        ];
        $this->data_sekretaris_okp->editData($okp->id_skre_umum, $data);
        return redirect()->route('okp.dsekretaris');
    }

    public function dbendahara()
    {
        $okp = $this->okp->detailData(Auth::user()->id);
        $data = ['user' => $this->data_bendahara_okp->detailData($okp->id_bend_umum)];
       
        return view('okp/bio/bendahara', $data);
    }

    public function ubendahara(Request $request)
    {
        $okp = $this->okp->detailData(Auth::user()->id);
        $ttl = $request->t.", ".$request->tl;
        $data = [

            'email' => $request->email,
            'nama_bend' => $request->nama_bend,
            'ttl' => $ttl,
            'agama' => $request->agama,
            'jenkel' => $request->jenkel,
            'pendidikan_akhir' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'kontak'=>$request->kontak
            
        ];
        $this->data_bendahara_okp->editData($okp->id_bend_umum, $data);
        return redirect()->route('okp.dbendahara');
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
        $data = [
            'singkatan' => $request->singkatan,
            'nama_jenjang' => $request->nama_jenjang,
            'kategori_org' => $request->kategori_org,
            'bentuk_org' => $request->bentuk_org,
            'hinpun_knpi' => $request->hinpun_knpi,
            'alamat_jln' => $request->alamat_jln,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'website' => $request->website,
            'kode_pos' => $request->pos,
           
        ];
        $this->okp->editData($id, $data);
        if ($request->logo <> null) {
            $file  = $request->logo;
            $filename = 'okp_'.$id.'.'.$file->extension();
            $file->move(public_path('logo/okp'),$filename);
            $data = ['logo' => $filename];
            $this->okp->editData($id, $data);
        }
        return redirect()->route('okp.bio');
    }
    public function ulainya(Request $request)
    {
        $id = Auth::user()->id;
       
        $data = [
            'periode' => $request->periode,
            'mulai_pengurusan' => $request->mulai_pengurusan,
            'akhir_pengurusan' => $request->akhir_pengurusan,
        ];
        $this->okp->editData($id, $data);
        return redirect()->route('okp.dlainya');
    }
}
