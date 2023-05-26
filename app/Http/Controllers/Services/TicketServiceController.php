<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TicketServiceController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        Ticket::create($validated);
        Alert::success('Updated Succesfully', 'Data Ticket berhasil ditambah');
        return redirect()->route('ticket');
    }

    public function update(Request $request, Ticket $ticket)
    {
        $rules = [
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ];

        $validateData = $request->validate($rules);
        Ticket::where('id', $ticket->id)->update($validateData);
        // Alert::success('Updated Succesfully', 'Data Kas berhasil diubah');
        return redirect()->route('ticket');
    }

    public function destroy(Ticket $ticket)
    {
        Ticket::destroy($ticket->id);
        // Alert::success('Deleted Succesfully', 'Data Petugas berhasil dihapus');
        return redirect()->route('ticket');
    }
}
