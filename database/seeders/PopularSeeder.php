<?php

namespace Database\Seeders;

use App\Models\Popular;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PopularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Popular::create(['type' => "popular"]);
        Popular::create(['type' => "simple"]);
    }
}
