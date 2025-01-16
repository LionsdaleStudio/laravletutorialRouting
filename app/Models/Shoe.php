<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    //IDEGEN KULCS A REVIEW TÁBLÁBAN shoe_id NÉVEN

    public function reviews (): HasMany {
        return $this->hasMany(Review::class);
    } /* AZ ÖSSZES ELŐFORDULÁST MEGKERESI */

    
    public function review() : HasOne {
        return $this->hasOne(related: Review::class);
    } /* AZ ELSŐ ELŐFORDULÁST KERESI MEG */

    /* Általában csak az egyiket használjuk.  */
    /* Mindig az a formátum hogy keresem a SHOES tábla ID-jét
        és a REVIEWS tábla shoe_id-jét.
    */
}
