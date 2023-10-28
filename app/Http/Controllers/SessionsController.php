<?php

namespace App\Http\Controllers;

Use Str;
Use Hash;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use App\Models\m_user;
use App\Models\data_ads;
use App\Models\data_loker;
use App\Models\data_event;
use App\Models\data_berita;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->ads = new data_ads();
        $this->user = new m_user();
        $this->loker = new data_loker();
        $this->event = new data_event();
        $this->berita = new data_berita();
    }

    public function create()
    {
        return view('sessions.index');
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

    public function landingPage()
    {
        $data = [
            'ads' => $this->ads->allData(),
            'jumlah_user' => $this->user->count(),
            'loker' => $this->loker->landingPage(),
            'event' => $this->event->landingPage(),
            'berita' => $this->berita->landingPage(),

        ];

        foreach ($data['event'] as &$event) { 
            $event->deskripsi = Str::limit($event->deskripsi, '25');
        }

        foreach ($data['berita'] as &$berita) { 
            $berita->isi = Str::limit($berita->isi, '25');
        }

        return view ('pages.laravel-examples.landingpage', $data);
    }

}
