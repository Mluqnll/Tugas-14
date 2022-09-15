<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Provinsi;
use Illuminate\Support\Facades\Auth;
use NunoMaduro\Collision\Provider;
use App\Http\Controllers\API\AlamatResource;

class AdminController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user();
        return view('admin.superadmin.index', $data);
    }

    public function cekAlamat()
    {
        $data['user'] = auth()->user();
        $data['list_provinsi'] = Provinsi::all();
        return view('admin.test-alamat', $data);
    }
}
