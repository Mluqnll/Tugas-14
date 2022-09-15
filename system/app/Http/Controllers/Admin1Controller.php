<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Admin1Controller extends Controller
{
    
    public function index()
    {
        $data['penjual'] = auth()->guard('penjual')->user();
        return view('penjual.index', $data);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
