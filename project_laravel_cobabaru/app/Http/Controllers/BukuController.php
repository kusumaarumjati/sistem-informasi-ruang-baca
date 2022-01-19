<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\buku;

class BukuController extends Controller
{
    public function index(){
        $buku = buku::all();
    	return view('/v_buku/buku',['buku' => $buku]);
    }
    public function tambah(){
    	return view('/v_buku/tambah');
    }
    public function simpan(Request $request){
        $this->validate($request,[
            //'id_buku' => 'required',
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required'
        ]);

        buku::create([
            'id_buku' => null,
            'judul_buku' => $request->judul_buku,
            'penulis_buku' => $request->penulis_buku,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'stok' => $request->stok
        ]);
        return redirect('/buku');
    }
    public function edit($id){
        $buku = buku::find($id);
        return view('v_buku/edit',['buku'=>$buku]);
    }
    public function update(Request $request){
        $this->validate($request,[
            //'id_buku' => 'required',
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required'
        ]);
        $buku = buku::find($request->id_buku);
            //$buku->id_buku = $request->id_buku;
            $buku->judul_buku = $request->judul_buku;
            $buku->penulis_buku = $request->penulis_buku;
            $buku->penerbit = $request->penerbit;
            $buku->tahun_terbit = $request->tahun_terbit;
            $buku->stok = $request->stok;
            $buku->save();
            return redirect('/buku');
    }
    public function delete($id){
        $buku = buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }

}
