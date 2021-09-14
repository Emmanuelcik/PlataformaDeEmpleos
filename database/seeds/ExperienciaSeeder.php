<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("experiencias")->insert([
            "nombre" => "0 - 6 Meses",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        DB::table("experiencias")->insert([
            "nombre" => "6 Meses - 1 Año",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        DB::table("experiencias")->insert([
            "nombre" => "1 - 3 Años",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        DB::table("experiencias")->insert([
            "nombre" => "3  - 5 Años",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        DB::table("experiencias")->insert([
            "nombre" => "5 - 7 Años",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        DB::table("experiencias")->insert([
            "nombre" => "7 - 10 Años",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        DB::table("experiencias")->insert([
            "nombre" => "10 - 12 Años",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        DB::table("experiencias")->insert([
            "nombre" => "12 - 15 Años",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }
}
