<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitaplar extends Model
{
    use HasFactory;
    protected $table='kitaplar';
    protected $fillable=[

        'kitap_ismi',
        'sayfa_sayisi',
        'kitap_turu',
    ];
}