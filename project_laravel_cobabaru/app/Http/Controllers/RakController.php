<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rak;
use App\buku; 

class RakController extends Controller
{
    public function index(){
        $rak = rak::all();
        $buku = buku::all();
    	return view('/v_rak/rak',['rak' => $rak], compact('buku'));
    }
    public function tambah(){
        $rak = rak::all();
        $buku = buku::all();
    	return view('/v_rak/tambah', compact('rak','buku'));
    }
    public function simpan(Request $request){
        $this->validate($request,[
            //'id_rak' => 'required',
            'nama_rak' => 'required',
            'lokasi_rak' => 'required',
            'id_buku' => 'required'
        ]);

        rak::create([
            'id_rak' => null,
            'nama_rak' => $request->nama_rak,
            'lokasi_rak' => $request->lokasi_rak,
            'id_buku' => $request->id_buku
        ]);
        return redirect('/rak');
    }
    public function edit($id){
        $rak = rak::find($id);
        $buku = buku::all();
        return view('v_rak/edit',['rak'=>$rak], compact('buku'));
    }
    public function update(Request $request){
        $this->validate($request,[
            //'id_rak' => 'required',
            'nama_rak' => 'required',
            'lokasi_rak' => 'required',
            'id_buku' => 'required'
        ]);
        $rak = rak::find($request->id_rak);
            // $rak->id_rak = $request->id_ral;
            $rak->nama_rak = $request->nama_rak;
            $rak->lokasi_rak = $request->lokasi_rak;
            $rak->id_buku = $request->id_buku;
            $rak->save();
            return redirect('/rak');
    }
    public function delete($id){
        $rak = rak::find($id);
        $rak->delete();
        return redirect('/rak');
    }

}
