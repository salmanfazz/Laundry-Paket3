<?php

use Illuminate\Database\Seeder;

class PaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Paket::create([
        	'id_paket'  => 1,
        	'id_outlet' => 1,
        	'jenis' => 'selimut',
        	'harga' => '500000',
		]);
    }
}
