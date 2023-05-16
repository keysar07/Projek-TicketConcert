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
                'description' => 'Tiket akses ke area berdiri di depan panggung.',
                'priority_id' => 1,
            ],
            [
                'title' => 'Ticket Reserved Seating',
                'description' => 'Tiket akses ke kursi yang sudah ditentukan.',
                'priority_id' => 2,
            ],
            [
                'title' => 'Ticket VIP',
                'description' => 'Tiket yang memberikan fasilitas tambahan kepada penonton.',
                'priority_id' => 3,
            ]
        ];

        foreach ($priority as $key => $s) {
            Ticket::create([
                'title' => $s['title'],
                'description' => $s['description'],
                'priority_id' => $s['priority_id']
            ]);
        }
    }
}
