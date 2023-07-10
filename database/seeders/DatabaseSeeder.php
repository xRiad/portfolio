<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AboutMeSeeder;
use Database\Seeders\BlogHeadSeeder;
use Database\Seeders\ContactInfoSeeder;
use Database\Seeders\IntroSeeder;
use Database\Seeders\PortfolioHeadSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(AboutMeSeeder::class);
        $this->call(BlogHeadSeeder::class);
        $this->call(ContactInfoSeeder::class);
        $this->call(IntroSeeder::class);
        $this->call(PortfolioHeadSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
