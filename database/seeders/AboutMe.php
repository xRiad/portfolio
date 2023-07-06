<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutMe extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:table('about_me')->insert([
            'name' => 'Riad',
            'short_desc' => 'As',
            'img' => './assets/css/images',
            'desc' => 'Asds'
        ]);
    }
}
