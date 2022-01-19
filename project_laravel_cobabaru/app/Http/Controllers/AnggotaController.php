<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anggota;

class AnggotaController extends Controller
{
    public function index(){
        $anggota = anggota::all();
    	return view('/v_anggota/anggota',['anggota' => $anggota]);
    }
    public function tambah(){
    	return view('/v_anggota/tambah');
    }
    public function simpan(Request $request){
        $this->validate($request,[
            //'id_anggota' => 'required',
            'nama_anggota' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp_anggota' => 'required',
            'alamat' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        anggota::create([
            'id_anggota' => null,
            'nama_anggota' => $request->nama_anggota,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telp_anggota' => $request->no_telp_anggota,
            'alamat' => $request->alamat,
            'username' => $request->username,
            'password' => $request->password
        ]);
        return redirect('/anggota');
    }
    public function edit($id){
        $anggota = anggota::find($id);
        return view('v_anggota/edit',['anggota'=>$anggota]);
    }
    public function update(Request $request){
        $this->validate($request,[
            //'id_anggota' => 'required',
            'nama_anggota' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp_anggota' => 'required',
            'alamat' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
        $anggota = anggota::find($request->id_anggota);
            // $anggota->id_anggota = $request->id_anggota;
            $anggota->nama_anggota = $request->nama_anggota;
            $anggota->jenis_kelamin = $request->jenis_kelamin;
            $anggota->no_telp_anggota = $request->no_telp_anggota;
            $anggota->alamat = $request->alamat;
            $anggota->username = $request->username;
            $anggota->password = $request->password;
            
            $anggota->save();
            return redirect('/anggota');
    }
    public function delete($id){
        $anggota = anggota::find($id);
        $anggota->delete();
        return redirect('/anggota');
    }

}
