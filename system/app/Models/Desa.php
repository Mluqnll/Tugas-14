<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kecamatan;

class Desa extends Model
{
    protected $table = "desa";

    function Kecamatan()
	{
		return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
	}
}
