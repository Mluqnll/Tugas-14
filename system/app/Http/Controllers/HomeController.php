<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produk;

class HomeController extends Controller
{
    public function index()
    {
        $data['list_produk'] = Produk::orderBY('id','DESC')->take(4)->get();
        $data['pembeli'] = auth()->guard('pembeli')->user();
        return view('ecommerce.admin.index', $data);
    }
    
    public function produk()
    { 
        $data['list_produk'] = Produk::all();
        $data['list_produk'] = Produk::Paginate(4);
        $data['pembeli'] = auth()->guard('pembeli')->user();
        return view('ecommerce.admin.produk',$data);
    }

    function filter(){
        $data['pembeli'] = auth()->guard('pembeli')->user();
        $nama = request('nama');
        $data['list_produk'] = Produk::where('nama','like', "%$nama%")->get();
        $data['nama'] = $nama;
        return view('ecommerce.admin.produk', $data);
    }

    function harga(){
        $data['pembeli'] = auth()->guard('pembeli')->user();
        $harga = request('harga');
        $data['list_produk'] = Produk::where('harga','like', "%$harga%")->get();
        $data['harga'] = $harga;
        return view('ecommerce.admin.produk', $data);
    }

    function test(){
        $data['list_produk'] = Produk::all();
        $data['list'] = Produk::simplePaginate(5);
        return view('ecommerce.admin.produk', $data);
    }

}