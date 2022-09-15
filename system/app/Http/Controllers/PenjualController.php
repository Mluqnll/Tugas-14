<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Penjual;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PenjualController extends Controller
{
    public function index()
    {
        $data['list_penjual'] = Penjual::all();
        $data['user'] = auth()->user();
        return view('admin.superadmin.penjual.index', $data);
    }

    public function create()
    {
        $data['user'] = auth()->user();
        return view('admin.superadmin.penjual.create',$data);
    }

    public function store(Request $request)
    {
        $penjual = New Penjual;
        $penjual->nama = request('nama');
        $penjual->username = request('username');
        $penjual->email = request('email');
        $penjual->jenis_kelamin = request('jenis_kelamin');
        $penjual->nama_toko = request('nama_toko');
        $penjual->nomor_hp = request('nomor_hp');
        $penjual->password = bcrypt (request('password'));
        $penjual->save();
        return redirect('admin/penjual')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Penjual $penjual)
    {
        $data['penjual'] = $penjual;
        $data['user'] = auth()->user();
        return view('admin.superadmin.penjual.show', $data);
    }

    public function edit(penjual $penjual)
    {
        $data['penjual'] = $penjual;
        $data['user'] = auth()->user();
        return view('admin.superadmin.penjual.edit', $data);
    }

    public function update(Penjual $penjual)
    {
        $penjual->nama = request('nama');
        $penjual->username = request('username');
        $penjual->email = request('email');
        $penjual->nama_toko = request('nama_toko');
        $penjual->nomor_hp = request('nomor_hp');
        $penjual->password = bcrypt (request('password'));
        $penjual->save();
        return redirect('admin/penjual')->with('primary', 'Data Berhasil Diedit');
    }

    public function destroy($id)
    {
        $data['user'] = auth()->user();
        Penjual ::destroy($id);
        return back()->with('danger', 'Data Berhasil hapus');
    }
}
