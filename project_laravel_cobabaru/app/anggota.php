<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class anggota extends Model
{
	public function pengembaliananggota(){
		return $this->hasMany(Peminjaman::class,'id_anggota');
	}
    
	public function peminjamananggota(){
		return $this->hasMany(Peminjaman::class,'id_anggota');
	}
	use SoftDeletes;
    protected $table = "anggota";
    protected $primaryKey ="id_anggota";
    protected $fillable = ['id_anggota', 'nama_anggota', 'jenis_kelamin', 'no_telp_anggota','username', 'password', 'alamat'];
    //public $timestamps = false;

}
