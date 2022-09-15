<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pembeli;

class RegisterController extends Controller
{

    public function index(){
        return view ('ecommerce.register');
    }

    public function store(Request $request)
    {
        $pembeli = New Pembeli;
        $pembeli->nama = request('nama');
        $pembeli->username = request('username');
        $pembeli->email = request('email');
        $pembeli->nomor_hp = request('nomor_hp');
        $pembeli->password = bcrypt (request('password'));
        $pembeli->save();
        return redirect('login');
    }
}
