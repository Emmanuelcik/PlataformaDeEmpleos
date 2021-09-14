<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "Emmanuel",
            "email" => "correo@correo.com",
            "email_verified_at" => Carbon::now(),
            "password" => Hash::make("12345678"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        DB::table("users")->insert([
            "name" => "Jesus",
            "email" => "correo2@correo.com",
            "email_verified_at" => Carbon::now(),
            "password" => Hash::make("12345678"),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }
}
