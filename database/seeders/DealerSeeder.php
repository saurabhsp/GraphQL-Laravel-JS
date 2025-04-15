<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DealerSeeder extends Seeder
{
    public function run(): void
    {
        $years = [2021, 2022, 2023, 2024];

        for ($i = 0; $i < 45; $i++) {
            $year = $years[array_rand($years)];
            $createdAt = Carbon::create($year, rand(1, 12), rand(1, 28), rand(0, 23), rand(0, 59), rand(0, 59));

            DB::table('dealers')->insert([
                'user_id' => rand(1, 10),
                'name' => 'Dealer ' . Str::random(5),
                'email' => Str::random(5) . '@example.com',
                'phone' => '9' . rand(100000000, 999999999),
                'password' => bcrypt('password'),
                'created_at' => $createdAt,
                'updated_at' => $createdAt,
                'status' => rand(0, 1),
            ]);
        }
    }
}
