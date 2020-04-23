<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Member::create([
        	'id_member'  => 1,
        	'nama_member' => 'Osiris',
        	'alamat' => 'Jl. Pyramid 2F',
        	'jenis_kelamin' => 'L',
        	'telp' => '08969666777'
		]);
    }
}
