<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
	public $timestamps = false;
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
    	'id_transaksi','id_outlet','kode_invoice','id_member','id_user','id_paket','tanggal','status','total_bayar','status_bayar'
    ];

    /*  
    public function () {
    	return $this->hasOne('App\Transaksi','id','id_transaksi');
    }   
    */
}
