<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->insert([
        	'id' => 1,
            'namaRule' => 'admin',
        ]);

        DB::table('roles')->insert([
        	'id' => 2,
            'namaRule' => 'user',
        ]);
        
    	DB::table('users')->insert([
        	'roles_id' => 1,
            'username' => 'Ridlwan Yunus',
            'name' => 'Ridlwan',
            'email' => 'hiddenjustice309@gmail.com',
            'password' => bcrypt('123'),
        ]);

        
    }
}
