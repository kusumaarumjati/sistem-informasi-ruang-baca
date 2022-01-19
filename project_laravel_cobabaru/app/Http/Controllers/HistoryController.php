<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjaman;

class HistoryController extends Controller
{
    public function index(Request $request){
    	if ($request->has('cari')) {
    		$peminjaman=peminjaman::where('id_anggota','LIKE',"%".$request->cari."%")->get();
    	}else{
    	$peminjaman = peminjaman::all();
    }
    	return view('dashboard_anggota/history', compact('peminjaman'));
    }
}
