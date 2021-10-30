<?php

namespace Database\Seeders;

use App\Models\ItemCondition;
use App\Models\User;
use App\Models\PrimaryCategory;
use App\Models\SecondaryCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ItemConditionSeeder::class,
            PrimaryCategorySeeder::class,
            SecondaryCategorySeeder::class,
        ]);
    }
}
