<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\Shop;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /**
         * Seed the application's database.
         *
         * @return void
         */
        {

            Event::factory(10)->create();
            $this->call([
                UserSeeder::class,
                AdminSeeder::class,
                CategorySeeder::class,
                ReservationSeeder::class
            ]);

           
            Shop::factory(100)->create();
            // \App\Models\User::factory(10)->create();

        }
    }
}
