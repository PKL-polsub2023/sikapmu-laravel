<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\m_user;
use App\Models\user_umum;
use App\Models\okp;
use App\Models\wirausaha;
use App\Models\pemuda_pelopor;
use App\Models\data_ketua_okp;
use App\Models\data_sekretaris_okp;
use App\Models\data_bendahara_okp;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
        $this->wm = new wirausaha();
        $this->okp = new okp();
        $this->pp = new pemuda_pelopor();
        $this->uu = new user_umum();
        $this->ketua = new data_ketua_okp();
        $this->sekretaris = new data_sekretaris_okp();
        $this->bendahara = new data_bendahara_okp();
    }

    public function create()
    {
        return view('register.index');
    }

    public function store(){
        $attributes = request()->validate([
            
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'kontak' =>'required',
            'role' =>'required'
        ]);
        $data = [
            'nama' => request()->nama,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
            'kontak' => request()->kontak,
            'role' => request()->role,
        ];
        $this->user->addData($data);
        $id = $this->user->id(request()->email);
        $data = ['id_user' => $id->id];
        
        switch (request()->role) {
            case 'pp':
                $this->pp->addData($data);
                break;
            case 'wm':
                $this->wm->addData($data);
                break;
            case 'uu':
                $this->uu->addData($data);
                break;
            case 'okp':
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
                    'id_user' => $id->id,
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
                break;  
           
        }
        return redirect()->route('login');
    }
}
