<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewFactory> */
    use HasFactory;

    //
    public function shoe(): BelongsTo {
        return $this->belongsTo(Shoe::class);
    } /* Keresem a REVIEWS SHOE_ID alapján
    a SHOE tábla ugyanilyen ID-jét. */
   
    public function user(): BelongsTo { /* user_id alapján megtalálja a user tábla ID-jénél egyező usert. */
        return $this->belongsTo(User::class);
    }
}
