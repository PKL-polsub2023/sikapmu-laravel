<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\pemuda_pelopor;
use Illuminate\Support\Facades\Hash;



class c_pelopor extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->pelopor = new pemuda_pelopor();
    }

    public function index()
    {
        
        $data = [
            'pelopor' => $this->pelopor->allData(),
        ];

        foreach ($data['pelopor'] as &$user) {
            $fullName = $user->nama; 
            $namaParts = explode(' ', $fullName);
            $user->namaDepan = $namaParts[0];
            $user->namaBelakang = implode(' ', array_slice($namaParts, 1));
        }
        return view ('Admin.pelopor.index', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required|email',
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
                'nama' => $request->nama_depan." ".$request->nama_belakang,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'kontak' => $request->kontak,
                'role' => "pp",
            ];
            $this->user->addData($data);

            $data2 = [
                'id_user' => $idBaru,
            ];
            $this->pelopor->addData($data2);
            return response()->json(['success' => true]);
        }
    
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'kontak' => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }else{
            if($request->password <> null){
                $data = [
                    'nama' => $request->nama_depan." ".$request->nama_belakang,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'kontak' => $request->kontak,
                ];
            }else{
                $data = [
                    'nama' => $request->nama_depan." ".$request->nama_belakang,
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
    
}
