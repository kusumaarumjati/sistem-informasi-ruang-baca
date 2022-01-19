<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peminjaman extends Model
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
    protected $table = "peminjaman";
    protected $primaryKey ="id_peminjaman";
    protected $fillable = ['id_peminjaman', 'tanggal_pinjam', 'tanggal_kembali', 'id_anggota', 'id_buku', 'id_petugas'];
    public $timestamps = false;
}
