<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class rak extends Model
{
	public function buku(){
		return $this->belongsTo(buku::class, 'id_buku');
	}
	use SoftDeletes;
    protected $table = "rak";
    protected $primaryKey ="id_rak";
    protected $fillable = ['id_rak', 'nama_rak', 'lokasi_rak', 'id_buku'];
}
