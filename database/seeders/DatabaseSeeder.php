<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Faker\Provider\en_US\PhoneNumber;
use Faker\Provider\DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,250) as $index) {
	        DB::table('users')->insert([
	            'name' => $faker->name,
	            'email' => $faker->email,
	            'password' => bcrypt('secret'),
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber,
                'created_at' =>$faker -> dateTimeBetween('-3 day', '-1 day'),

	        ]);
	    }
    }    
    
}
