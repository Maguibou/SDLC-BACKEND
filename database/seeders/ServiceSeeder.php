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
                'name' => 'Service A',
                'description' => 'Description for Service A',
                'price' => 100.00,
                'agence_id' => 1, // Assurez-vous que l'agence avec l'ID 1 existe
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Service B',
                'description' => 'Description for Service B',
                'price' => 150.00,
                'agence_id' => 2, // Assurez-vous que l'agence avec l'ID 2 existe
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Service C',
                'description' => 'Description for Service C',
                'price' => 200.00,
                'agence_id' => 3, // Assurez-vous que l'agence avec l'ID 3 existe
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
