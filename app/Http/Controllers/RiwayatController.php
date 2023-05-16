<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $data = Pesan::where('user_id', $user->id)->get();

        return view('dashboard.riwayats.index', compact('data'));
    }
}
