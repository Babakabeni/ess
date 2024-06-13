<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(10)
            ->has(
                Orders::factory()
                    ->count(3)
                    ->hasAttached(
                        Products::factory()
                        ->count(5),
                        ['total_quantity' => rand(100, 500), 'total_price' => rand(1, 3)]
                    )
                    );
    }
}
