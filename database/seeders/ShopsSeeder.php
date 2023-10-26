<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Shops;
use Illuminate\Database\Seeder;
use Database\Factories\ShopsFactory;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shops::factory()->count(10)->create(); // Adjust the count as needed
    }
}
