<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use Illuminate\Http\Request;

class MetodeController extends Controller
{
    public function index()
    {
        return view('dashboard.metodes.index', [
            'metode' => Metode::all()
        ]);
    }

    public function create()
    {
        $metode = Metode::all();
        return view('dashboard.metodes.create', [
            'metode' => $metode
        ]);
    }

    public function edit(Metode $metode)
    {
        return view('dashboard.metodes.update', [
            'metode' => $metode
        ]);
    }
}
