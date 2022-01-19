<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardanggotaController extends Controller
{
    public function index(){
    	return view('dashboard_anggota/dashboard');
    }
}
