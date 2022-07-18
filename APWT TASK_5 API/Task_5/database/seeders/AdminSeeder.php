<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \App\Models\Admin::factory()->create([
            
            'email' => 'xyz@email.com',
            'phone' => '12345678901',
            'PASSWORD' => md5('43265478'),
            'created_at' => '2022-06-23 02:24:08',
            'updated_at' => '2022-06-23 02:24:08'

        ]);
    }
}
