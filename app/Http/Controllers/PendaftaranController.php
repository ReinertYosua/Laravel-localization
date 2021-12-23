<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PendaftaranController extends Controller
{
    public function formPendaftaran($locale = 'id'){
        App::setLocale($locale);
        return view('form-pendaftaran');
    }

    public function prosesForm(Request $request, $locale = 'id'){
        App::setLocale($locale);
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'alamat1' => 'required|min:5|max:20',
            'alamat2' => 'required|min:5|max:20',
            'kota'=> 'required',
            'kelurahan' => 'required',
            'kodepost' => 'required',
        ]);
    }
}
