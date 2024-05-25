<?php

namespace Database\Seeders;

use App\Models\Cetizen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CetizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cetizen::factory(20)->create();
    }
}
