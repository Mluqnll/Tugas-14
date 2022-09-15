<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user();
        $data['list_user'] = User::all();
        return view('admin.superadmin.user.index', $data);
    }

    public function create()
    {
        $data['user'] = auth()->user();
        return view('admin.superadmin.user.create', $data);
    }

    public function store(Request $request)
    {
        $user = New User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->jenis_kelamin = request('jenis_kelamin');
        $user->email = request('email');
        $user->password = request('password');
        $user->handleUploadFoto();
        $user->save();
        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $data['user'] = User::find($id);
        $data['user'] = auth()->user();
        return view('admin.superadmin.user.show', $data);
    }

    public function edit($id)
    {
        $data['user'] = User::find($id);
        $data['user'] = auth()->user();
        return view('admin.superadmin.user.edit', $data);
    }

    public function update(User $user)
    {
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->save();
        return redirect('admin/user')->with('primary', 'Data Berhasil Diedit');
    }

    public function destroy($id)
    {
        User ::destroy($id);
        return back()->with('danger', 'Data Berhasil hapus');
    }
}
