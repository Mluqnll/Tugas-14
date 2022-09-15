<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kabupaten;

class Provinsi extends Model
{
    protected $table = "provinsi";

    function Kabupaten()
	{
		return $this->belongsTo(Kabupaten::class, 'id');
	}
}
