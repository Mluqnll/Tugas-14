<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Authenticate;


class Pembeli extends ModelAuthenticate
{

	protected $table = "client";
}