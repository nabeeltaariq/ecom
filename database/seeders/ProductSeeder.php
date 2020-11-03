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
        DB::table("products")->insert(
            [
                'name'=>"LG 4K",
                'price'=>'300000',
                'description'=>'4K Cinema Display',
                'category'=>'LED',
                'gallery'=>'https://www.lg.com/ae/images/tvs/md06251659/gallery/TV-OLED-77-65-GX-A-Gallery-01-1600-v2.jpg'
            ]
        );
    }
}
