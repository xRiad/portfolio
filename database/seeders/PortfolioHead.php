<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioHead extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:table('portfolio_head')->inser([
            'title' => 'a'
        ]);
    }
}
