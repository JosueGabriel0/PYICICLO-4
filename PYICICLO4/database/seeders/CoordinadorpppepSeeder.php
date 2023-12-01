<?php

namespace Database\Seeders;

use App\Models\Coordinadorpppep;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoordinadorpppepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coordinadorpppep::factory(20)->create();
    }
}
