<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert(
        	[
        		'username'=>'admin',
        		'name'=>'Administarator baru',
        		'email'=>'admin.baru@admin.com',
        		'password'=>bcrypt('password')
        	]
        );
    }
}
