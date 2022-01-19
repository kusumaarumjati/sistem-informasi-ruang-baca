<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class pengembalian extends Model
{
	public function buku(){
		return $this->belongsTo(buku::class, 'id_buku');
	}
	public function anggota(){
		return $this->belongsTo(anggota::class, 'id_anggota');
	}
	public function petugas(){
		return $this->belongsTo(petugas::class, 'id_petugas');
	}
	use SoftDeletes;
    protected $table = "pengembalian";
    protected $primaryKey ="id_pengembalian";
    protected $fillable = ['id_pengembalian', 'tanggal_pengembalian', 'id_anggota', 'id_petugas', 'id_buku'];
    // public $timestamps = false;

}
