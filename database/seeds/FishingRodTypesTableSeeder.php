<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FishingRodTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fishing_rod_types')->insert([[
            'type' => "spławikówka",
            'desc' => 'do łowienia na spławik',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'type' => "bat",
            'desc' => 'Wędka bez przelotek przeznaczona do łownienia na spławik.',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'type' => "spining",
            'desc' => 'Wędka na rybt drapieżne do łowienia na sztuczną przynętę.',
            'created_at' => date('Y-m-d H:i:s'),
        ]]);
    }
}