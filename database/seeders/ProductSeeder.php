<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('product')->insert(
            [
                'sku' => "00001",
                'description' => "blusas primavera verano",
                'valor' => 100000,
                'tienda' => 1,
                'imagen' => 'resources\images\zara\zara-1.jpg'
            ]
        );
        DB::table('product')->insert(
            [
                'sku' => "00002",
                'description' => "vestido fashion",
                'valor' => 50000,
                'tienda' => 1,
                'imagen' => 'resources\images\zara\zara-2.jpg'
            ]
        );
        DB::table('product')->insert(
            [
                'sku' => "00003",
                'description' => "zapatos casual",
                'valor' => 70000,
                'tienda' => 2,
                'imagen' => 'resources\images\velez\velez-1.jpg'
            ]
        );
        DB::table('product')->insert(
            [
                'sku' => "00004",
                'description' => "camisa casual",
                'valor' => 25000,
                'tienda' => 3,
                'imagen' => 'resources\images\koaj\koaj-1.jpg'
            ]
        );
    }
}
