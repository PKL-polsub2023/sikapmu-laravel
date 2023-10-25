<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data_pemuda;

class c_data_pemuda extends Controller
{
    public function __construct()
    {
        $this->dp = new data_pemuda();
    }
    public function index()
    {
        $data = ['dp' => $this->dp->allData()];
        return view('Admin.pemuda.index', $data);
    }
    public function create()
    {
        return view('Admin.pemuda.create');
    }
    public function store(Request $request)
    {
        $jumlah = $request->pemuda_satu + $request->pemuda_dua + $request->penc_kerja + $request->pas_hiv + $request->oat_hiv + $request->wira_usaha_muda + $request->jumlah_okp + $request->angota_okp + $request->curanmor + $request->narkoba + $request->pembunuhan + $request->osis + $request->bem;
        $data = [
           'tahun'=> $request->tahun,
           'pemuda_satu'=> $request->pemuda_satu,
           'pemuda_dua'=> $request->pemuda_dua,
           'penc_kerja'=> $request->penc_kerja,
           'pas_hiv'=> $request->pas_hiv,
           'oat_hiv'=> $request->oat_hiv,
           'wira_usaha_muda'=> $request->wira_usaha_muda,
           'angota_okp'=> $request->angota_okp,
           'jum_okp'=> $request->jumlah_okp,
           'curanmor'=> $request->curanmor,
           'narkoba'=> $request->narkoba,
           'pembunuhan'=> $request->pembunuhan,
           'osis'=> $request->osis,
           'bem'=> $request->bem,
           'jumlah'=> $jumlah,
        ];
        $this->dp->addData($data);
        return redirect('/pemuda');
    }

    public function edit($id)
    {
        $data =['dp' =>$this->dp->detailData($id)];
        return view('admin.pemuda.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $jumlah = $request->pemuda_satu + $request->pemuda_dua + $request->penc_kerja + $request->pas_hiv + $request->oat_hiv + $request->wira_usaha_muda + $request->jumlah_okp + $request->angota_okp + $request->curanmor + $request->narkoba + $request->pembunuhan + $request->osis + $request->bem;
        $data = [
           'tahun'=> $request->tahun,
           'pemuda_satu'=> $request->pemuda_satu,
           'pemuda_dua'=> $request->pemuda_dua,
           'penc_kerja'=> $request->penc_kerja,
           'pas_hiv'=> $request->pas_hiv,
           'oat_hiv'=> $request->oat_hiv,
           'wira_usaha_muda'=> $request->wira_usaha_muda,
           'angota_okp'=> $request->angota_okp,
           'jum_okp'=> $request->jumlah_okp,
           'curanmor'=> $request->curanmor,
           'narkoba'=> $request->narkoba,
           'pembunuhan'=> $request->pembunuhan,
           'osis'=> $request->osis,
           'bem'=> $request->bem,
           'jumlah'=> $jumlah,
        ];
        $this->dp->editData($id, $data);
        return redirect('/pemuda');
    }

    public function destroy($id)
    {
        $this->dp->deleteData($id);
        return redirect('/pemuda');
    }
   
}
