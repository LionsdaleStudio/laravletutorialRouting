<?php

namespace Database\Seeders;

use App\Models\Shoe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shoe::factory(23)->create();
    }
}
