<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $priority = [
            [
                'title' => 'Ticket General Admission',
                'price' => '1000000',
                'description' => 'Tiket akses ke area berdiri di depan panggung.',
            ],
            [
                'title' => 'Ticket Reserved Seating',
                'price' => '2500000',
                'description' => 'Tiket akses ke kursi yang sudah ditentukan.',
            ],
            [
                'title' => 'Ticket VIP',
                'price' => '5000000',
                'description' => 'Tiket yang memberikan fasilitas tambahan kepada penonton.',
            ]
        ];

        foreach ($priority as $key => $s) {
            Ticket::create([
                'title' => $s['title'],
                'price' => $s['price'],
                'description' => $s['description'],
            ]);
        }
    }
}
