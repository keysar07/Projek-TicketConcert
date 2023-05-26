<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('dashboard.tickets.index', [
            'ticket' => Ticket::all(),
        ]);
    }

    public function create()
    {
        $ticket = Ticket::all();
        return view('dashboard.tickets.create', [
            'ticket' => $ticket
        ]);
    }

    public function edit(Ticket $ticket)
    {
        return view('dashboard.tickets.update', [
            'ticket' => $ticket,
        ]);
    }
}
