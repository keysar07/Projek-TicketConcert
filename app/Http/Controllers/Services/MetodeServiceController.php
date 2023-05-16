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

    public function update(Request $request, Metode $metode)
    {
        $rules = [
            'name' => 'required',
        ];

        $validateData = $request->validate($rules);
        Metode::where('id', $metode->id)->update($validateData);
        // Alert::success('Updated Succesfully', 'Data Kas berhasil diubah');
        return redirect()->route('metode');
    }

    public function destroy(Metode $metode)
    {
        Metode::destroy($metode->id);
        // Alert::success('Deleted Succesfully', 'Data Petugas berhasil dihapus');
        return redirect()->route('metode');
    }
}
