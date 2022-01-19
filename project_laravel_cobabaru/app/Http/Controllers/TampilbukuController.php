<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\buku;

class TampilbukuController extends Controller
{
    public function index(Request $request){
    	if ($request->has('cari')) {
    		$buku = buku::where('judul_buku','LIKE',"%".$request->cari."%")->get();
    	}
    	else{
    	$buku = buku::all();
    }
    	return view('dashboard_anggota/tampilbuku', compact('buku'));
    }
}
