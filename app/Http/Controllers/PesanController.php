<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use App\Models\Pesan;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $metode = Metode::all();
        $ticket = Ticket::all();
        $user = User::all();
        return view('dashboard.pesans.index', [
            'pesan' => Pesan::all(),
            'metode' => $metode,
            'ticket' => $ticket,
            'user' => $user
        ]);
    }

    public function create()
    {
        $pesan = Pesan::all();
        return view('dashboard.pesans.create', [
            'pesan' => $pesan
        ]);
    }

    public function edit(Pesan $pesan)
    {
        return view('dashboard.pesans.update', [
            'pesan' => $pesan
        ]);
    }

    public function invoice(Pesan $pesan)
    {
        $metode = Metode::all();
        $ticket = Ticket::all();
        $user = User::all();
        return view('dashboard.riwayats.ticket', [
            'pesan' => $pesan,
            'metode' => $metode,
            'ticket' => $ticket,
            'user' => $user
        ]);
    }
}
