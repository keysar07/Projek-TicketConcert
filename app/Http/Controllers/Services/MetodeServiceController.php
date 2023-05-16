<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Metode;
use Illuminate\Http\Request;

class MetodeServiceController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);
        Metode::create($validated);
        return redirect()->route('metode');
    }
}
