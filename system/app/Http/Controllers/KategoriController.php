<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class KategoriController extends Controller
{
    public function index()
    {
        $data['list_kategori'] = Kategori::all();
        $data['user'] = auth()->user();
        return view('admin.superadmin.kategori.index', $data);
    }

    public function create()
    {
        $data['user'] = auth()->user();
        return view('admin.superadmin.kategori.create', $data);
    }

    public function store(Request $request)
    {
        $kategori = New Kategori;
        $kategori->nama = request('nama');
        $kategori->save();
        return redirect('admin/kategori')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Kategori $kategori)
    {
        $data['kategori'] = $kategori;
        $data['user'] = auth()->user();
        return view('admin.superadmin.kategori.show', $data);
    }

    public function edit(Kategori $kategori)
    {
        $data['kategori'] = $kategori;
        $data['user'] = auth()->user();
        return view('admin.superadmin.kategori.edit', $data);
    }

    public function update(Kategori $kategori)
    {
        $kategori->nama = request('nama');
        $kategori->save();
        return redirect('admin/kategori')->with('primary', 'Data Berhasil Diedi');
    }

    public function destroy($id)
    {
        Kategori ::destroy($id);
        $data['user'] = auth()->user();
        return back()->with('danger', 'Data Berhasil hapus');
    }
}
