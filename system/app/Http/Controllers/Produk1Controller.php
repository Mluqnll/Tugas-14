<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Penjual;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class Produk1Controller extends Controller
{
    public function index()
    {
        $data['list_produk'] = Produk::all();
        $data['penjual'] = auth()->guard('penjual')->user();
        return view('penjual.produk.index', $data);
    }

    public function create()
    {
        $data['list_penjual'] = Penjual::all();
        $data['penjual'] = auth()->guard('penjual')->user();
        return view('penjual.produk.create', $data);
    }

    public function store(Request $request)
    {
        $penjual = new Produk;
        $penjual->nama = request('nama');
        $penjual->id_penjual = request('id_penjual');
        $penjual->stock = request('stock');
        $penjual->harga = request('harga');
        $penjual->deskripsi = request('deskripsi');
        $penjual->handleUploadFoto();
        $penjual->save();
        return redirect('produk')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Produk $produk)
    {
        $data['produk'] = $produk;
        $data['penjual'] = auth()->guard('penjual')->user();
        return view('penjual.produk.show', $data);
    }

    public function edit(Produk $produk)
    {
        $data['produk'] = $produk;
        $data['penjual'] = auth()->guard('penjual')->user();
        return view('penjual.produk.edit', $data);
    }

    public function update(Produk $produk)
    {
        $produk->nama = request('nama');
        $produk->stock = request('stock');
        $produk->harga = request('harga');
        $produk->deskripsi = request('deskripsi');
        $produk->handleUploadFoto();
        $produk->save();
        return redirect('produk')->with('primary', 'Data Berhasil Diedit');
    }

    public function destroy(Produk $produk)
    {
        $produk->handleDelete();
        $produk->delete();
        return back()->with('danger', 'Data Berhasil hapus');
    }

    function filter()
    {
        $nama = request('nama');
        $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
        $data['nama'] = $nama;
        return view('penjual.produk.index', $data);
    }
}
