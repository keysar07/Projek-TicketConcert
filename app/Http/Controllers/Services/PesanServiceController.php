<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PesanServiceController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'alamat' => 'required',
            'no_telp' => "required",
            'ticket_id' => "required",
            'metode_id' => "required",
        ]);

        $post = new Pesan();
        $post->id = mt_rand(10000000, 99999999);
        $post->alamat = $data['alamat'];
        $post->no_telp = $data['no_telp'];
        $post->ticket_id = $data['ticket_id'];
        $post->metode_id = $data['metode_id'];
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
