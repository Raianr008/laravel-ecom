<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
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
                "name"=>"samsung",
                "price"=>"$3000",
                "description"=>"samsung SmartPhone",
                "category"=>"phone",
                "gallery"=>"https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s10-1.jpg"

            ],
            [
                "name"=>"apple",
                "price"=>"$4000",
                "description"=>"Apple Imac",
                "category"=>"PC",
                "gallery"=>"https://www.apple.com/newsroom/images/product/imac/standard/apple_new-imac-spring21_hero_04202021_Full-Bleed-Image.jpg.large.jpg"

            ],
            [
                "name"=>"LG",
                "price"=>"$2000",
                "description"=>"LG TV",
                "category"=>"TV",
                "gallery"=>"https://www.lg.com/in/images/tvs/md06117716/gallery/Desk-02.jpg"

            ],
            [
                "name"=>"sony",
                "price"=>"$1000",
                "description"=>"SOny Washing machine",
                "category"=>"Washing machine",
                "gallery"=>"https://www.lg.com/in/images/washing-machines/md07515049/gallery/FHM1208ZDL-Washing-Machines-Front-View-D-01.jpg"

            ],
            [
                "name"=>"whirlpool ",
                "price"=>"$2500",
                "description"=>"whirlpool refrigerator",
                "category"=>" refrigerator",
                "gallery"=>"https://buy2day.com.bd/wp-content/uploads/2020/10/Whirlpool-Refrigerator-5WRS22FDBF-Water-Dispenser.jpg"

            ],

           

        ]);
    }
}
