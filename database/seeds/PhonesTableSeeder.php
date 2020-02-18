<?php

use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            'user_id' => 1,
            'phone_one' => '(11) 23941-3226',
            'phone_two' => '(11) 14526-6132', 
            'phone_three' => '(11) 84081-7207', 
            'phone_four' => '(11) 33153-8708', 
            'phone_five' => '(11) 33153-8708', 
            'phone_six' => '(11) 33153-8708'
        ]);

        DB::table('phones')->insert([
            'user_id' => 2,
            'phone_one' => '(21) 83903-2546',
            'phone_two' => '(21) 72208-2546', 
            'phone_three' => '(21) 72208-4285', 
            'phone_four' => '(21) 72208-4285', 
            'phone_five' => '(21) 23941-7207', 
            'phone_six' => '(21) 72208-4285'
        ]);

       
    }
}
