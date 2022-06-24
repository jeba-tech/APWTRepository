<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \App\Models\Customer::factory()->create([
            'name' => 'xyz',
            'cus_id' => '5',
            'dob' => '2022-06-08',
            'email' => 'xyz@email.com',
            'phone' => '12345678901',
            'password' => md5('43265478'),
            'created_at' => '2022-06-23 02:24:08',
            'updated_at' => '2022-06-23 02:24:08'

        ]);
    }
}
