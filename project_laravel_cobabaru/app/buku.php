<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class buku extends Model
{
	public function rak(){
		return $this->hasMany(rak::class);
	}
	public function pengembalianbuku(){
		return $this->hasMany(pengembalian::class,'id_buku');
	}
	public function peminjamanbuku(){
		return $this->hasMany(Peminjaman::class,'id_buku');
	}
	use SoftDeletes;
    protected $table = "buku";
    protected $primaryKey ="id_buku";
    protected $fillable = ['id_buku', 'judul_buku', 'penulis_buku', 'penerbit', 'tahun_terbit','stok'];
    // public $timestamps = false;

}
