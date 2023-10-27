<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\okp;
use App\Models\data_ketua_okp;
use App\Models\data_sekretaris_okp;
use App\Models\data_bendahara_okp;
use App\Models\file_loker;
use App\Models\file_event;
use App\Models\data;
use Illuminate\Support\Facades\Hash;



class c_okp extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->okp = new okp();
        $this->ketua = new data_ketua_okp();
        $this->sekretaris = new data_sekretaris_okp();
        $this->bendahara = new data_bendahara_okp();
        $this->file_loker = new file_loker();
        $this->file_event = new file_event();
        $this->data = new data();
    }

    public function index()
    {
        
        $data = [
            'okp' => $this->okp->allData(),
        ];
        return view ('Admin.okp.index', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'kpassword' => 'required|same:password',
            'kontak' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }else{
            $checkID = $this->user->checkID();
            $idBaru = $checkID + 1;
            $data = [
                'id' => $idBaru,
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'kontak' => $request->kontak,
                'role' => "okp",
            ];
            $this->user->addData($data);

            $checkID_Ketua = $this->ketua->checkID();
            $checkID_Sekretaris = $this->sekretaris->checkID();
            $checkID_Bendahara = $this->bendahara->checkID();
        
            if($this->ketua->checkID() <> null){
                $idKetua = $checkID_Ketua + 1;
            }else{
                $idKetua = 1;
            }

            if($this->bendahara->checkID() <> null){
                $idBendahara = $checkID_Bendahara + 1;
            }else{
                $idBendahara = 1;
            }

            if($this->sekretaris->checkID() <> null){
                $idSekretaris = $checkID_Sekretaris + 1;
            }else{
                $idSekretaris = 1;
            }

            $okps = [
                'id_user' => $idBaru,
                'id_ket_umum' => $idKetua,
                'id_skre_umum' => $idSekretaris,
                'id_bend_umum' => $idBendahara,
            ];
            $this->okp->addData($okps);

            $ketua = [
                'id_ket_umum' => $idKetua,
            ];
            $this->ketua->addData($ketua);

            $sekretaris = [
                'id_skre_umum' => $idSekretaris,
            ];
            $this->sekretaris->addData($sekretaris);

            $bendahara = [
                'id_bend_umum' => $idBendahara,
            ];
            $this->bendahara->addData($bendahara);

            return response()->json(['success' => true]);
        }
    
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
 
        ]);
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }else{
            if($request->password <> null){
                $data = [
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'kontak' => $request->kontak,
                ];
            }else{
                $data = [
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'kontak' => $request->kontak,
                ];
            }
            $this->user->editData($id, $data);
            return response()->json(['success' => true]);
        }
    }

    public function verifikasi ($id)
    {
        $data = [
            'status_akun' => "Terverifikasi",
        ];
        $this->user->editData($id, $data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $this->data->deleteUser($id);
        $this->file_event->deleteUser($id);
        $this->file_loker->deleteUser($id);
        $this->okp->deleteData($id);
        $this->user->deleteData($id);
        return redirect()->route('okp.index')->with('success', "Data Berhasil dihapus.");
    }
    
}
