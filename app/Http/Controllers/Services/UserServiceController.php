<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserServiceController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();
        $user->assignRole($request->input('roles'));
        // Alert::success('Created Succesfully', 'Data Petugas berhasil ditambah');
        return back();
    }

    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id); //mengambil data berdasarkan ID yang diberikan
        $data->name = $request->input('name');
        $data->username = $request->input('username');

        // Cek apakah password baru diinputkan
        if (!empty($request->input('password'))) {
            $data->password = Hash::make($request->input('password')); //mengisi nilai password dengan hash password baru yang diinputkan
        }
        $data->save(); //menyimpan perubahan pada basis data
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $data->assignRole($request->input('roles'));
        // Alert::success('Updated Succesfully', 'Data Petugas berhasil diubah');
        return redirect()->route('user'); //redirect ke halaman yang diinginkan dan menampilkan pesan sukses
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        // Alert::success('Deleted Succesfully', 'Data Petugas berhasil dihapus');
        return redirect()->route('user');
    }
}
