<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $priority = [
            [
                'name' => 'General Admission',
                'price' => '1000000'
            ],
            [
                'name' => 'Reserved Seating',
                'price' => '2500000'
            ],
            [
                'name' => 'VIP',
                'price' => '5000000'
            ]
        ];

        foreach ($priority as $key => $s) {
            Priority::create([
                'name' => $s['name'],
                'price' => $s['price']
            ]);
        }
    }
}
