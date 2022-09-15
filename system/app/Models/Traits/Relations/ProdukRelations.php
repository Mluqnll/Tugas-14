<?php

namespace App\Models\Traits\Relations;
use App\Models\Penjual;

trait ProdukRelations {
    function Penjual()
	{
		return $this->belongsTo(Penjual::class, 'id_penjual');
	}
}