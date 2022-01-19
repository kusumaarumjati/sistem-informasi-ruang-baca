<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjaman;
use App\anggota;
use App\petugas;
use App\buku;
//use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
	public function index(){
    	$peminjaman = peminjaman::all();
        $anggota = anggota::all();
        $petugas = petugas::all();
        $buku = buku::all();
        return view('/peminjaman/peminjaman',['peminjaman' => $peminjaman], compact('anggota'), compact('petugas'), compact('buku'));
    }
    public function tambah(){
        $anggota = anggota::all();
        $buku = buku::all();
        $petugas = petugas::all();
    	return view('/peminjaman/tambah', compact('anggota','buku','petugas'));
    }
    public function simpan(Request $request){
        $this->validate($request,[
        	//'id_peminjaman' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'id_anggota' => 'required',
            'id_buku' => 'required',
            'id_petugas' => 'required'
        ]);

        peminjaman::create([
			'id_peminjaman' => null,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'id_anggota' => $request->id_anggota,
            'id_buku' => $request->id_buku,
            'id_petugas' => $request->id_petugas
        ]);
        return redirect('/peminjaman');
    }

    public function edit($id){
        $peminjaman = peminjaman::find($id);
        $anggota = anggota::all();
        $buku = buku::all();
        $petugas = petugas::all();
        return view('/peminjaman/edit',['peminjaman'=>$peminjaman], compact('anggota','buku','petugas'));
    }

    public function update(Request $request){
        $this->validate($request,[
            //'id_peminjaman' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'id_anggota' => 'required',
            'id_buku' => 'required',
            'id_petugas' => 'required'
        ]);
            $peminjaman = peminjaman::find($request->id_peminjaman);
           //$peminjaman->id_peminjaman = $request->id_peminjaman;
            $peminjaman->tanggal_pinjam = $request->tanggal_pinjam;
            $peminjaman->tanggal_kembali = $request->tanggal_kembali;
            $peminjaman->id_anggota = $request->id_anggota;
            $peminjaman->id_buku = $request->id_buku;
            $peminjaman->id_petugas = $request->id_petugas;
            $peminjaman->save();
            return redirect('/peminjaman');
    }
    public function delete($id){
        $peminjaman = peminjaman::find($id);
        $peminjaman->delete();
        return redirect('/peminjaman');
    }

}
