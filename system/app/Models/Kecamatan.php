<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kabupaten;
use App\Models\Desa;

class Kecamatan extends Model
{
    protected $table = "kecamatan";

    function Kabupaten()
	{
		return $this->belongsTo(Kabupaten::class, 'id_kabupaten');
	}
	
    function Desa()
	{
		return $this->belongsTo(Desa::class, 'id');
	}
}
