<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'tb_member';
    protected $primaryKey = 'id_member';
	public $timestamps = false;
    protected $fillable = [
    	'id_member','nama_member','alamat','jenis_kelamin','telp'
    ];

    /*  
    public function transaksi () {
    	return $this->hasOne('App\Transaksi','id','id_transaksi');
    }
    */       
}
