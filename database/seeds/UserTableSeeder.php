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
        DB::table('users')->insert([
        	'id' => 1,
            'name' => 'Berry',
            'email' => 'clickdisini@gmail.com',
            'password' => bcrypt('rahasia'),
        ]);
    }
}
