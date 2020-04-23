<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->integer('id_transaksi')->autoIncrement();
            $table->integer('id_outlet');
            $table->string('kode_invoice',255);
            $table->integer('id_member');
            $table->integer('id_user');
            $table->integer('id_paket');
            $table->date('tanggal');
			$table->enum('status',['Baru','Diambil','Selesai','Proses']);
			$table->integer('total_bayar');
			$table->enum('status_bayar',['Lunas','Belum Dibayar']);
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_transaksi');
    }
}
