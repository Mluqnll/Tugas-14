<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Produk;
use App\Models\Authenticate;


class Penjual extends ModelAuthenticate
{

	protected $table = "penjual";

	function getJenisKelaminStringAttribute(){
        return($this->jenis_kelamin ==1) ? "Laki-laki" : "Perempuan";
    }
}