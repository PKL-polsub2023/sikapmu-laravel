<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_user;


class c_password extends Controller
{
    public function __construct()
    {
        $this->user = new m_user();
    }
    public function password(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|confirmed',
        ]);
        $data = ['password' => $request->password];
        $this->user->editData($id, $data);
        return redirect()->route('dashboard');
    }
}
