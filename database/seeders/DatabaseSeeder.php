<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            \Modules\User\Database\Seeders\UserDatabaseSeeder::class,
            \Modules\Listing\Database\Seeders\ListingDatabaseSeeder::class,
        ]);
    }
}
