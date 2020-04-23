<?php

use Illuminate\Database\Seeder;

class OutletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Outlet::create([
        	'id_outlet'  => 1,
        	'nama_outlet' => 'Toko Masa Kini',
        	'alamat' => 'Jln. Masa Lalu No 70',
        	'tlp' => '089696667666'
		]);
    }
}
