<?php

namespace App\Models;

use App\Models\Traits\Attributes\UserAttributes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use UserAttributes;
    protected $table = 'user';
    use HasApiTokens, HasFactory, Notifiable;

    
}
