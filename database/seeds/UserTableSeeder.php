<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Users::create([
        	'id_user'  => 1,
        	'nama' => 'admin',
        	'username' => 'admin',
        	'password'  => bcrypt('admin'),
        	'id_outlet' => '1',
        	'role' => 'admin'
		]);

        \App\Users::create([
            'id_user'  => 2,
            'nama' => 'kasir',
            'username' => 'kasir',
            'password'  => bcrypt('kasir'),
            'id_outlet' => '1',
            'role' => 'kasir'
        ]);


        \App\Users::create([
            'id_user'  => 3,
            'nama' => 'owner',
            'username' => 'owner',
            'password'  => bcrypt('owner'),
            'id_outlet' => '1',
            'role' => 'owner'
        ]);
    }
}
