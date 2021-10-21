<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 一次建立 10 筆
        for ($i = 1; $i <= 10; $i++) {
            // 透過 DB class 建立資料
            DB::table('tests')->insert([
                'username' => Str::random(10), // 產生長度 10 的字串
                'password' => bcrypt('secret'), // 產生亂數密碼
                'description' => Hash::make('description')
            ]);
        }
    }
}
