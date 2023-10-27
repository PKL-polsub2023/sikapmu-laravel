<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_user;
use App\Models\wirausaha;
use App\Models\file_loker;
use App\Models\file_event;
use App\Models\data_usaha;
use App\Models\data;
use Illuminate\Support\Facades\Hash;



class c_wiramuda extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->wirausaha = new wirausaha();
        $this->file_loker = new file_loker();
        $this->file_event = new file_event();
        $this->data_usaha = new data_usaha();
        $this->data = new data();

    }

    public function index()
    {
        
        $data = [
            'wiramuda' => $this->wirausaha->allData(),
        ];

        foreach ($data['wiramuda'] as &$user) {
            $fullName = $user->nama; 
            $namaParts = explode(' ', $fullName);
            $user->namaDepan = $namaParts[0];
            $user->namaBelakang = implode(' ', array_slice($namaParts, 1));
        }
        return view ('Admin.wiramuda.index', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
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
                'nama' => $request->nama_depan." ".$request->nama_belakang,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'kontak' => $request->kontak,
                'role' => "wm",
            ];
            $this->user->addData($data);

            $data2 = [
                'id_user' => $idBaru,
            ];
            $this->wirausaha->addData($data2);
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

    public function delete($id)
    {
        $this->data->deleteUser($id);
        $this->data_usaha->deleteUser($id);
        $this->file_event->deleteUser($id);
        $this->file_loker->deleteUser($id);
        $this->wiramuda->deleteData($id);
        $this->user->deleteData($id);
        return redirect()->route('admin.wiramuda.index')->with('success', "Data Berhasil dihapus.");
    }
    
}
