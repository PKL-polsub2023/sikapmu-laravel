<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(){

        $attributes = request()->validate([
            'username' => 'required',
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'kontak' =>'required',
            'role' =>'required'
        ]);
        $attributes['password'] = Hash::make($attributes['password']);
        $user = User::create($attributes);
        auth()->login($user);

        if ($user->role === 'Admin') {
            return redirect('/dashboard'); // Jika peran admin
        } elseif($user->role === 'OKP') {
            return redirect('/index2'); // Jika peran bukan admin
        }elseif($user->role === 'Pemuda Pelopor') {
            return redirect('/biopemuda'); // Jika peran bukan admin
        }elseif($user->role === 'Wirausaha Muda') {
            return redirect('/biouserw'); // Jika peran bukan admin
        }elseif($user->role === 'User Umum') {
            return redirect('/biouser'); // Jika peran bukan admin
        }else{
            return redirect('/landingpage');
        }
    }
}
