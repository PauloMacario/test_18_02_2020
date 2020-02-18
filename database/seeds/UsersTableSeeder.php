<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Paulo',
            'last_name' => 'Macario de Lima Martins',
            'email' => 'paulo@teste.com',
            'birth_date' => '2020-05-14' 
        ]);

        DB::table('users')->insert([
            'name' => 'Rasmus',
            'last_name' => 'Lerdorf',
            'email' => 'Rlerdorf@teste.com',
            'birth_date' => '1968-11-22' 
        ]);
      
    }
}
