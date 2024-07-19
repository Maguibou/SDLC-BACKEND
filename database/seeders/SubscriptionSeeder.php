<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscriptions')->insert([
            [
                'name' => 'Standard',
                'price' =>5000,
                'description' => 'Visites, assistance virtuelle',
                'monthlyDuration' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Gold',
                'price' => 10000,
                'description' => 'Assistance virtuelle et Physique',
                'monthlyDuration' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Premium',
                'price' => 20000,
                'description' => 'Tous les services et aide complete',
                'monthlyDuration' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
