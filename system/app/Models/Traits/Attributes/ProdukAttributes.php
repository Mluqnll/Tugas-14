<?php

namespace App\Models\Traits\Attributes;

use Illuminate\Support\Str;
use App\Models\Produk;

trait ProdukAttributes
{
	function getHargaStringAttribute()
	{
		return "Rp. " . number_format($this->attributes['harga']);
	}

	function getTanggalProduksiAttribute()
	{
		$tanggal = $this->created_at;
		return strftime("%d %b %Y", strtotime($this->created_at));
	}



	function handleUploadFoto()
	{
		$this->handleDelete();
		if (request()->hasFile('foto')) {
			$foto = request()->file('foto');
			$destination = "images/produk";
			$randomStr = Str::random(5);
			$filename = $this->id_penjual . "-" . time() . "-" . $randomStr . "." . $foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/" . $url;
			$this->save();
		}
	}

	function handleDelete()
	{
		$foto = $this->foto;
		if ($foto) {
			$path = public_path($foto);
			// dd ($path, file_exists($path));
			if (file_exists($path)) {
				unlink($path);
			}
		}
		return true;
	}
}
