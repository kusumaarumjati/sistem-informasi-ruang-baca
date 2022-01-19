<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjaman;

class HistorypetugasController extends Controller
{
    public function index(Request $request){
    	if ($request->has('search')) {
    		$peminjaman=peminjaman::where('id_buku','LIKE',"%".$request->search."%")->get();
    	}else{
    	$peminjaman = peminjaman::all();
    }
    	return view('peminjaman/historypetugas', compact('peminjaman'));
    }
}
