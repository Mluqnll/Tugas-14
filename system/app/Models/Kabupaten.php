<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provinsi;
use App\Models\Kecamatan;

class Kabupaten extends Model
{
    protected $table = "kabupaten";

    function Provinsi()
	{
		return $this->belongsTo(Provinsi::class, 'id_provinsi');
	}

    function Kecamatan()
	{
		return $this->belongsTo(Kecamatan::class, 'id');
	}
}
