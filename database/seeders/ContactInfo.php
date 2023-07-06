<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactInfo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:table('contact_info')->insert([
            'phone' => 'a',
            'email' => 'a',
            'twitter' => 'a',
            'github' => 'a',
            'codewars' => 'a'
        ]);
    }
}
