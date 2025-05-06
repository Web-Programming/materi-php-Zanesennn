<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

       // DB::table("users")->insert([
        //    'name' => 'zanesen2',
         //   'email' => 'Zanesen2@gmail.com',
          //  'password' => Hash::make("password")
        //]);

         DB::table("users")
         ->where("id",1)
         ->update([
            'password' => Hash::make("123456")
         ]);
    }
}
