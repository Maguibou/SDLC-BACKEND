<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Visite guidée',
                'description' => 'Visiter l\'UAC',
                'price' => 0,
                'agence_id' => 1, 
                'subscription_id' => 1, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Visite guidée',
                'description' => 'Visiter la mairie de Cotonou',
                'price' => 0,
                'agence_id' => 2,
                'subscription_id' => 1, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Visite guidée',
                'description' => 'Visiter l\'UP',
                'price' => 0,
                'agence_id' => 3, 
                'subscription_id' => 1, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
