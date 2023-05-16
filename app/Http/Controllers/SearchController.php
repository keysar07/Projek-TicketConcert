<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use App\Models\Pesan;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $metode = Metode::all();
        $ticket = Ticket::all();
        $user = User::all();
        return view('dashboard.search.index', [
            'pesan' => Pesan::all(),
            'metode' => $metode,
            'ticket' => $ticket,
            'user' => $user
        ]);
    }

    public function hasil()
    {
        $metode = Metode::all();
        $ticket = Ticket::all();
        $user = User::all();
        return view('dashboard.search.show', [
            'pesan' => Pesan::all(),
            'metode' => $metode,
            'ticket' => $ticket,
            'user' => $user
        ]);
    }
}
