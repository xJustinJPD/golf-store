<?php

namespace Database\Seeders;

use App\Models\Bag as ModelsBag;
use Database\Factories\Bag;
use Database\Factories\BagFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BagFactory::factory()->times(50)->create();
    }
}
