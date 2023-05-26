<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use App\Models\Ticket;
use App\Models\Priority;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PesanServiceController extends Controller
{
    public function store(Request $request)
    {
        $alamat = $request->input('alamat');
        $telp = $request->input('no_telp');
        $ticketId = $request->input('ticket_id');
        $metode = $request->input('metode_id');
        $quantity = $request->input('quantity');

        // Dapatkan harga tiket berdasarkan jenis tiket yang dipilih
        $ticket = Ticket::find($ticketId);
        $harga = $ticket->price;

        // Proses penghitungan harga total
        $hargaTotal = $quantity * $harga;

        $post = new Pesan();
        $post->id = mt_rand(10000000, 99999999);
        $post->ticket_id = $ticketId;
        $post->alamat = $alamat;
        $post->no_telp = $telp;
        $post->metode_id = $metode;
        $post->quantity = $quantity;
        $post->harga_total = $hargaTotal;
        $post->user_id = Auth::id(); // set user_id berdasarkan user yang sedang login
        $post->save();
        Alert::success('Berhasil Pesan Tiket', 'Data Tiket berhasil ditambah');
        return redirect()->route('riwayat');
    }

    public function update(Request $request, Pesan $pesan)
    {
        $rules = [
            'nisn' => 'required',
            'nis' => "required",
            'nama' => "required",
            'jenkel' => "required",
        ];

        $validateData = $request->validate($rules);
        Pesan::where('id', $pesan->id)->update($validateData);
        return redirect()->route('pesan');
    }

    public function destroy(Pesan $pesan)
    {
        Pesan::destroy($pesan->id);
        Alert::success('Hapus Data Pesanan', 'Data Pesan Tiket berhasil dihapus');
        return redirect()->route('pesan');
    }
}
