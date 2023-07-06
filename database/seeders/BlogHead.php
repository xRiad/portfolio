<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogHead extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:table('blog_head')->insert([
            'title' => 'Blogs :)'
        ]);
    }
}
