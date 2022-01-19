<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anggota;
use App\petugas;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('v_anggota/loginanggota');
    }
    public function masuk(Request $request){
    	$this->validate($request, [
        'username' => 'required|string', //VALIDASI KOLOM USERNAME
        //TAPI KOLOM INI BISA BERISI EMAIL ATAU USERNAME
        'password' => 'required|string|min:6',
    ]);

    //LAKUKAN PENGECEKAN, JIKA INPUTAN DARI USERNAME FORMATNYA ADALAH EMAIL, MAKA KITA AKAN MELAKUKAN PROSES AUTHENTICATION MENGGUNAKAN EMAIL, SELAIN ITU, AKAN MENGGUNAKAN USERNAME
    $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
  
    //TAMPUNG INFORMASI LOGINNYA, DIMANA KOLOM TYPE PERTAMA BERSIFAT DINAMIS BERDASARKAN VALUE DARI PENGECEKAN DIATAS
    $login = [
        $loginType => $request->username,
        'password' => $request->password
    ];
  
    //LAKUKAN LOGIN
    if (auth()->attempt($login)) {
        //JIKA BERHASIL, MAKA REDIRECT KE HALAMAN HOME
        return redirect()->route('dashboard_anggota/dashboard');
    }
    //JIKA SALAH, MAKA KEMBALI KE LOGIN DAN TAMPILKAN NOTIFIKASI 
    return redirect()->route('v_anggota/loginanggota')->with(['error' => 'Email/Password salah!']);
}
}
