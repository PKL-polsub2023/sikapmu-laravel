<?php

namespace App\Http\Controllers;

Use Str;
Use Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // Mencari pengguna dengan email yang diberikan
        $user = User::where('email', $attributes['email'])->first();

        if (! $user || ! Hash::check($attributes['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        auth()->login($user);

        session()->regenerate();

        return redirect('/dashboard');
        // if ($user->role === 'Admin') {
        //     return redirect('/dashboard'); // Jika peran admin
        // } elseif($user->role === 'OKP') {
        //     return redirect('/index2'); // Jika peran bukan admin
        // }elseif($user->role === 'Pemuda Pelopor') {
        //     return redirect('/biopemuda'); // Jika peran bukan admin
        // }elseif($user->role === 'Wirausaha Muda') {
        //     return redirect('/biouserw'); // Jika peran bukan admin
        // }elseif($user->role === 'User Umum') {
        //     return redirect('/biouser'); // Jika peran bukan admin
        // }else{
        //     return redirect('/landingpage');
        // }
    }



    public function show(){
        request()->validate([
            'email' => 'required|email',
        ]);

        $status = Password::sendResetLink(
            request()->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);

    }

    public function update(){

        request()->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            request()->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => ($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/sign-in');
    }

}
