<?php

namespace App\Models\Traits\Attributes;
use App\Models\User;
use Illuminate\Support\Str;

trait UserAttributes {

    function getJenisKelaminStringAttribute(){
        return($this->jenis_kelamin ==1) ? "Laki-laki" : "Perempuan";
    }

    function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    function handleUploadFoto()
	{
		if (request()->hasFile('foto')) {
			$foto = request()->file('foto');
			$destination = "images/user";
			$randomStr = Str::random(5);
			$filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/" . $url;
			$this->save();
		}
	}
}