<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengembalian;
use App\anggota;
use App\petugas;
use App\buku;

class pengembalianController extends Controller
{
    public function index(){
        $pengembalian = pengembalian::all();
        $anggota = anggota::all();
        $petugas = petugas::all();
        $buku = buku::all();
    	return view('/v_pengembalian/pengembalian',['pengembalian' => $pengembalian], compact('anggota'), compact('petugas'), compact('buku'));
    }
    public function tambah(){
        $anggota = anggota::all();
        $petugas = petugas::all();
        $buku = buku::all();
    	return view('/v_pengembalian/tambah', compact('anggota','petugas','buku'));
    }
    public function simpan(Request $request){
        $this->validate($request,[
            //'id_pengembalian' => 'required',
            'tanggal_pengembalian' => 'required',
            'id_anggota' => 'required',
            'id_petugas' => 'required',
            'id_buku' => 'required'
        ]);

        pengembalian::create([
            'id_pengembalian' => null,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'id_anggota' => $request->id_anggota,
            'id_petugas' => $request->id_petugas,
            'id_buku' => $request->id_buku
        ]);
        return redirect('/pengembalian');
    }
    public function edit($id){
        $pengembalian = pengembalian::find($id);
        $anggota = anggota::all();
        $petugas = petugas::all();
        $buku = buku::all();
        return view('v_pengembalian/edit',['pengembalian'=>$pengembalian], compact('anggota','petugas','buku'));
    }
    public function update(Request $request){
        $this->validate($request,[
            //'id_pengembalian' => 'required',
            'tanggal_pengembalian' => 'required',
            'id_anggota' => 'required',
            'id_petugas' => 'required',
            'id_buku' => 'required'
        ]);
        $pengembalian = pengembalian::find($request->id_pengembalian);
            // $pengembalian->id_pengembalian = $request->id_ral;
            $pengembalian->tanggal_pengembalian = $request->tanggal_pengembalian;
            $pengembalian->id_anggota = $request->id_anggota;
            $pengembalian->id_petugas = $request->id_petugas;
            $pengembalian->id_buku = $request->id_buku;
            $pengembalian->save();
            return redirect('/pengembalian');
    }
    public function delete($id){
        $pengembalian = pengembalian::find($id);
        $pengembalian->delete();
        return redirect('/pengembalian');
    }

}
