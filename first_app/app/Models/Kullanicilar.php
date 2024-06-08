<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Kullanicilar extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;
    
    protected $table='kullanicilar';
    protected $fillable=[
      
        'username',
        'email',
        'password',
        'yetki_duzeyi',
        'created_at',
        'updated_at',

    ];
}