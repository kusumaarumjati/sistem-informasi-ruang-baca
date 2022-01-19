<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class petugas extends Model
{
	public function pengembalianpetugas(){
		return $this->hasMany(pengembalian::class,'id_petugas');
	}
	public function peminjamanpetugas(){
		return $this->hasMany(Peminjaman::class,'id_petugas');
	}
	use SoftDeletes;
    protected $table = "petugas";
    protected $primaryKey ="id_petugas";
    protected $fillable = ['id_petugas', 'nama_petugas', 'jabatan', 'no_telp_petugas', 'alamat_petugas'];
    // public $timestamps = false;
}
