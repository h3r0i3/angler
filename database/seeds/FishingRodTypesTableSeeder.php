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
            'type' => "Bat",
            'desc' => 'Najprostszy rodzaj wędki, najczęściej o długości 
            od 2 do kilkunastu metrów, pozbawiony przelotek oraz kołowrotka. 
            Najczęściej wykorzystywany do łowienia na jeziorach lub kanałach do łowienia na spławik.',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'type' => "Tyczka",
            'desc' => 'Wędka nasadowa najczęściej o długości od 4 do 16 metrów, 
            składająca się z tyczki oraz topu na którym znajduje się amortyzator 
            do którego przymocowany jest zestaw spławikowy. Najczęściej wykorzystywany 
            do do łowienia w jeziorach, rzekach i kanałach.',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'type' => "Wędka spinningowa",
            'desc' => 'Wędka zbudowana z włókna szklanego bądź węglowego o długości 1,5 - 3 metrów
            przeznaczona do połowu ryb drapieżnych oraz spokojnego żeru. Zbudowana jest podobnie do zwykłych wędek.
            Różnica polega na tym, iż są krótsze i bardziej wytrzymałe oraz półów polega na zarzucaniu i zwijaniu przynęty. 
            Używane są do łowienia na każdym typie wód.',
            'created_at' => date('Y-m-d H:i:s'),
        ],
        [
            'type' => "Wędka podlodowa",
            'desc' => 'Służy do łowienia ryb żyjących pod lodem. Wędki te są bardzo małych rozmiarów, 
            zazwyczaj od 0,3 do 1 metra.',
            'created_at' => date('Y-m-d H:i:s'),
        ],        
        [
            'type' => "Wędka spławikowa",
            'desc' => 'Rodzaj wędki o długości od 2 do 8 metrów, pozwalająca ze względu na swoję elastyczną budowę na 
            dalekie zarzuty spławika, gdzie jest on zarazem sygnaliatorem brań ryb. Za pomocą tego typu wędki łowi się ryby białe.',
            'created_at' => date('Y-m-d H:i:s'),
        ],        
        [
            'type' => "Wędka grunotwa",
            'desc' => 'Służą one do połowu metodą gruntową. Są one najczęsciej długości 2,4 - 3,8 metrów. 
            Posiadają dzwoneczek lub wiszący sygnalizator służący do informowania wędkarza o braniu ryby.',
            'created_at' => date('Y-m-d H:i:s'),
        ]]);
    }
}