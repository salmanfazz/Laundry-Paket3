<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $table = 'tb_outlet';
    protected $primaryKey = 'id_outlet';
    protected $fillable = [
    	'id_outlet','nama_outlet','alamat','tlp'
    ];

    /*  
    public function () {
    	return $this->hasOne('App\Transaksi','id','id_transaksi');
    }   
    */ 
}
