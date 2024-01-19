<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Train;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trains')->insert([
            [
                'name' => 'AVE',
                'passengers' => 200,
                'year' => 2010,
                'train_type_id' => 3
            ],
            [
                'name' => 'CPTM',
                'passengers' => 80,
                'year' => 2003,
                'train_type_id' => 1
            ],
            [
                'name' => 'Avant',
                'passengers' => 120,
                'year' => 2008,
                'train_type_id' => 2
            ],
            [
                'name' => 'Shinkansen',
                'passengers' => 230,
                'year' => 2002,
                'train_type_id' => 3
            ]

        ]);
    }
}
