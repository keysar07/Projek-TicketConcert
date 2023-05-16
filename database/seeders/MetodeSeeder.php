<?php

namespace Database\Seeders;

use App\Models\Metode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $metode = [
            [
                'name' => 'Debit'
            ],
            [
                'name' => 'OVO'
            ],
            [
                'name' => 'Dana'
            ],
            [
                'name' => 'ShopeePay'
            ]
        ];

        foreach ($metode as $key => $s) {
            Metode::create([
                'name' => $s['name'],
            ]);
        }
    }
}
