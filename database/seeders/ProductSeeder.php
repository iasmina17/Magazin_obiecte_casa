<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Vaza alba din ceramica',
                "price"=>"70",
                "description"=>"Vaza alba din ceramica 13 cm Mias Bloomingville; Dimensiuni:- Diametru: 14,5 cm;- Inaltime: 13,5 cm",
                "category"=>"Decoratiuni",
                "gallery"=>"https://b.cdnmp.net/846376239/p/m/8/vaza-alba-din-ceramica-13-cm-mias-bloomingville~522998.jpg"
            ],
            [
                'name'=>'Figurina din ciment',
                "price"=>"175",
                "description"=>"Figurina din ciment gri 31 cm Levia Moai Kave Home",
                "category"=>"decoratiuni",
                "gallery"=>"https://b.cdnmp.net/846376239/p/m/3/figurina-din-ciment-gri-31-cm-levia-moai-kave-home~20593.jpg"
            ],
            [
                'name'=>'Suport pentru lumenare',
                "price"=>"119",
                "description"=>"Suport alb din sticla pentru lumanare 10 cm Graphic Pols Potten",
                "category"=>"decoratiuni",
                "gallery"=>"https://b.cdnmp.net/846376239/p/m/5/suport-alb-din-sticla-pentru-lumanare-10-cm-graphic-pols-potten~174975.jpg"
            ],
            [
                'name'=>'Fata de perna decorativa',
                "price"=>"48",
                "description"=>"Fata de perna bej/neagra din bumbac 30x50 cm Brafton Kave Home",
                "category"=>"textile",
                "gallery"=>"https://b.cdnmp.net/846376239/p/m/1/fata-de-perna-bej-neagra-din-bumbac-30x50-cm-brafton-kave-home~282411.jpg"
             ]
        ]);
    }
}
