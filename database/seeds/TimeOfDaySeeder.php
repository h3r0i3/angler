<?php

use Illuminate\Database\Seeder;

class TimeOfDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('time_of_day')->insert([[
            'name' => "Brzask",
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => "Ranek",
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => "Południe",
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => "Popołudnie",
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => "Wieczór",
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => "Zmierzch",
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'name' => "Północ",
            'created_at' => date('Y-m-d H:i:s'),
        ]]);
    }
}
