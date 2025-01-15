<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shoe extends Model
{
    /** @use HasFactory<\Database\Factories\ShoeFactory> */
    use HasFactory;
    use SoftDeletes;

    /* Arra szolgál, hogy megmondjuk, a felhasználó a kérésein keresztül, mit tölthet ki */
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'limited'
    ];
}
