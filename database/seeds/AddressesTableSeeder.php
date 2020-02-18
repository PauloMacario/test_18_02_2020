<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('addresses')->insert([
            'user_id' => 1, 
            'state' => 'SP', 
            'city' => 'São Paulo', 
            'neighborhood' => 'Centro', 
            'street' => 'Rua hum dois', 
            'number' => 100,
            'zip_code' => 03005501
        ]);

        DB::table('addresses')->insert([
            'user_id' => 2, 
            'state' => 'RJ', 
            'city' => 'Rio de Janeiro', 
            'neighborhood' => 'Centro', 
            'street' => 'Rua quatro cinco', 
            'number' => 50,
            'zip_code' => 02550001
        ]);


    }
}
