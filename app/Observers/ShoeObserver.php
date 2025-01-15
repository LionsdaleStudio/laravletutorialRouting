<?php

namespace App\Observers;

use App\Models\Shoe;

class ShoeObserver
{
    public function creating(Shoe $shoe): void
    {
        if (auth()->guest()) {
            return response()->json(["msg" => "Error"], 503);
        }
    }
    /**
     * Handle the Shoe "created" event.
     */
    public function created(Shoe $shoe): void
    {
        $shoe->created_by = auth()->user()->id;
        $shoe->save();
    }

    /**
     * Handle the Shoe "updated" event.
     */
    public function updating(Shoe $shoe): void
    {
        //
    }

    /**
     * Handle the Shoe "deleted" event.
     */
    public function deleted(Shoe $shoe): void
    {
        //
    }

    /**
     * Handle the Shoe "restored" event.
     */
    public function restored(Shoe $shoe): void
    {
        //
    }

    /**
     * Handle the Shoe "force deleted" event.
     */
    public function forceDeleted(Shoe $shoe): void
    {
        //
    }
}
