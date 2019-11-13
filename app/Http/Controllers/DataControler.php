<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataControler extends Controller
{
    public function addData(Request $request) {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->pass
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}
