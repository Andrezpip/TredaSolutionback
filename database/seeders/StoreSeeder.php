<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('store')->insert(
            [
                'name' => "ZARA",
                'openingDate' => Carbon::parse("10-02-2010"),
            ]
        );
        DB::table('store')->insert(
            [
                'name' => "VELEZ",
                'openingDate' =>  Carbon::parse("02-12-2018"),
            ]
        );
        DB::table('store')->insert(
            [
                'name' => "KOAJ",
                'openingDate' =>  Carbon::parse("05-01-2019"),
            ]
        );
    }
}
