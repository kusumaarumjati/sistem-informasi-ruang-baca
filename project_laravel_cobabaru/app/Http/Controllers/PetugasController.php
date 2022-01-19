<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;

class PetugasController extends Controller
{
    public function index(){
        $petugas = petugas::all();
    	return view('/v_petugas/petugas',['petugas' => $petugas]);
    }
    public function tambah(){
    	return view('/v_petugas/tambah');
    }
    public function simpan(Request $request){
        $this->validate($request,[
            //'id_petugas' => 'required',
            'nama_petugas' => 'required',
            'jabatan' => 'required',
            'no_telp_petugas' => 'required',
            'alamat_petugas' => 'required'
        ]);

        petugas::create([
            'id_petugas' => null,
            'nama_petugas' => $request->nama_petugas,
            'jabatan' => $request->jabatan,
            'no_telp_petugas' => $request->no_telp_petugas,
            'alamat_petugas' => $request->alamat_petugas
        ]);
        return redirect('/petugas');
    }
    public function edit($id){
        $petugas = petugas::find($id);
        return view('v_petugas/edit',['petugas'=>$petugas]);
    }
    public function update(Request $request){
        $this->validate($request,[
            //'id_petugas' => 'required',
            'nama_petugas' => 'required',
            'jabatan' => 'required',
            'no_telp_petugas' => 'required',
            'alamat_petugas' => 'required'
        ]);
        $petugas = petugas::find($request->id_petugas);
            //$petugas->id_petugas = $request->id_petugas;
            $petugas->nama_petugas = $request->nama_petugas;
            $petugas->jabatan = $request->jabatan;
            $petugas->no_telp_petugas = $request->no_telp_petugas;
            $petugas->alamat_petugas = $request->alamat_petugas;
            $petugas->save();
            return redirect('/petugas');
    }
    public function delete($id){
        $petugas = petugas::find($id);
        $petugas->delete();
        return redirect('/petugas');
    }

}
