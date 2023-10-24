<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\m_user;
use App\Models\user_umum;
use App\Models\okp;
use App\Models\wirausaha;
use App\Models\pemuda_pelopor;
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
    }

    public function create()
    {
        return view('register.create');
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
                $this->okp->addData($data);
                break;  
           
        }
        return redirect()->route('login');
    }
}
