<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FishPlaceProtectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fishs')->insert([[
            'name' => "amur",
            'photo_link' => 'amur.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "belona",
            'photo_link' => 'belona.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "boleń",
            'photo_link' => 'boleń.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "brzana",
            'photo_link' => 'brzana.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "certa",
            'photo_link' => 'certa.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "dorsz",
            'photo_link' => 'dorsz.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "głowacica",
            'photo_link' => 'głowacica.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "jaź",
            'photo_link' => 'jaź.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "jelec",
            'photo_link' => 'jelec.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "karaś",
            'photo_link' => 'karaś.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "karp",
            'photo_link' => 'karp.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "kleń",
            'photo_link' => 'kleń.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "krąp",
            'photo_link' => 'krąp.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "leszcz",
            'photo_link' => 'leszcz.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "lin",
            'photo_link' => 'lin.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "lipień",
            'photo_link' => 'lipień.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "łosoś",
            'photo_link' => 'łosoś.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "miętus",
            'photo_link' => 'miętus.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "okoń",
            'photo_link' => 'okoń.jpg',
            'info' => 'dodatkowe info',
        ],
        
        [
            'name' => "płoć",
            'photo_link' => 'płoć.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "pstrąg",
            'photo_link' => 'pstrąg.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "sandacz",
            'photo_link' => 'sandacz.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "sieja",
            'photo_link' => 'sieja.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "sielawa",
            'photo_link' => 'sielawa.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "sum",
            'photo_link' => 'sum.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "szczupak",
            'photo_link' => 'szczupak.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "świnka",
            'photo_link' => 'świnka.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "tołpyga",
            'photo_link' => 'tołpyga.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "troć",
            'photo_link' => 'troć.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "ukleja",
            'photo_link' => 'ukleja.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "węgorz",
            'photo_link' => 'węgorz.jpg',
            'info' => 'dodatkowe info',
        ],
        [
            'name' => "wzdręga",
            'photo_link' => 'wzdręga.jpg',
            'info' => 'dodatkowe info',
        ]]);


        /*DB::table('place')->insert([[
            'area' => "Wisła powyżej zapory",
            'info' => 'Okres ochronny obejmujący rybę występującą powyżej zapory we Włocławku, to jest od źródła do zapory.',
        ],
        [
            'area' => "Wisła poniżej zapory",
            'info' => 'Okres ochronny obejmujący rybę występującą poniżej zapory we Włocławku, to jest od zapory do ujścia rzeki.',
        ],
        [
            'area' => "wszystkie wody",
            'info' => 'Okres ochronny obejmujący rybę występującą we wszystkoch wodach w Polsce.',
        ],
        [
            'area' => "nazwa miejsca",
            'info' => 'dodatkowe info',
        ],
        [
            'area' => "nazwa miejsca",
            'info' => 'dodatkowe info',
        ]]);
        


        DB::table('protect')->insert([[
            'date_from' => date('Y-m-d H:i:s'),
            'date_to' => date('Y-m-d H:i:s'),
            'info' => "info"
        ],
        [
            'date_from' => date('Y-m-d H:i:s'),
            'date_to' => date('Y-m-d H:i:s'),
            'info' => "info"
        ],
        [
            'date_from' => date('Y-m-d H:i:s'),
            'date_to' => date('Y-m-d H:i:s'),
            'info' => "info"
        ]]);*/
    }
}