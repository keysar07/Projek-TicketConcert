<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use App\Models\Pesan;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

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
        $metode = Metode::all();
        $ticket = Ticket::all();
        $user = User::all();
        return view('dashboard.pesans.update', [
            'pesan' => $pesan,
            'metode' => $metode,
            'ticket' => $ticket,
            'user' => $user
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

    public function searchById(Request $request)
    {
        $id = $request->input('id');

        $pesan = Pesan::find($id);

        $metode = Metode::all();
        $ticket = Ticket::all();
        $user = User::all();
        return view('dashboard.search.show', [
            'pesan' => $pesan,
            'metode' => $metode,
            'ticket' => $ticket,
            'user' => $user
        ]);
    }

    public function checkin($id)
    {
        $checkinTicket = Pesan::findOrFail($id);
        $checkinTicket->checkin_status = true;
        $checkinTicket->save();

        Alert::success('Berhasil Check-in', 'Tiket sudah dicheck-in');
        return redirect()->route('hasil-checkin')->with('success', 'Check-in berhasil dilakukan');
    }

    public function hasilCheckin()
    {
        $metode = Metode::all();
        $ticket = Ticket::all();
        $user = User::all();
        return view('dashboard.pesans.checkin', [
            'pesan' => Pesan::all(),
            'metode' => $metode,
            'ticket' => $ticket,
            'user' => $user
        ]);
    }

    public function laporanCheckin()
    {
        $metode = Metode::all();
        $ticket = Ticket::all();
        $user = User::all();
        return view('dashboard.pesans.sudah-checkin', [
            'pesan' => Pesan::all(),
            'metode' => $metode,
            'ticket' => $ticket,
            'user' => $user
        ]);
    }

    public function laporanBelumCheckin()
    {
        $metode = Metode::all();
        $ticket = Ticket::all();
        $user = User::all();
        return view('dashboard.pesans.belum-checkin', [
            'pesan' => Pesan::all(),
            'metode' => $metode,
            'ticket' => $ticket,
            'user' => $user
        ]);
    }
}
