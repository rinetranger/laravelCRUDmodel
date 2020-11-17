<?php

namespace Database\Seeders;
 use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MarketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'type'=>'USD/JPY',
            'price1'=>'105',
            'country1'=>'United States of America',
            'country2'=>'Japan'
        ];
        DB::table('market')->insert($param);

        $param=[
            'type'=>'AUD/JPY',
            'price1'=>'85',
            'country1'=>'Austlaria',
            'country2'=>'Japan'
        ];
        DB::table('market')->insert($param);

        $param=[
            'type'=>'EUR/JPY',
            'price1'=>'122',
            'country1'=>'Europe Union',
            'country2'=>'Japan'
        ];
        DB::table('market')->insert($param);

        $param=[
            'type'=>'GBP/JPY',
            'price1'=>'136',
            'country1'=>'Greate Kingdom',
            'country2'=>'Japan'
        ];
        DB::table('market')->insert($param);

        $param=[
            'type'=>'CHF/JPY',
            'price1'=>'100',
            'country1'=>'SwitherLand',
            'country2'=>'Japan'
        ];
        DB::table('market')->insert($param);
    }
}
