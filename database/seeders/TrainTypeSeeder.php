<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\TrainType;
class TrainTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('train_types')->insert([
            [
                'type' => 'Cercanias'
            ],
            [
                'type' => 'Media Distancia'
            ],
            [
                'type' => 'Alta Velocidad'
            ]
        ]);
    }
}
