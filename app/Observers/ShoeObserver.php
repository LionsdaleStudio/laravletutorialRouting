<?php

namespace App\Observers;

use App\Models\Shoe;

class ShoeObserver
{
    /**
     * Handle the Shoe "created" event.
     */
    public function creating(Shoe $shoe)
    {
        if (auth()->guest() == false) {
            $shoe->created_by = auth()->user()->id;
            $shoe->save();
        }

    }

    /**
     * Handle the Shoe "updated" event.
     */
    public function updating(Shoe $shoe)
    {
        if (auth()->guest() == false) {
            $shoe->updated_by = auth()->user()->id;
            $shoe->save();
        }

    }

    /**
     * Handle the Shoe "deleted" event.
     */
    public function deleted(Shoe $shoe)
    {
        //
    }

    /**
     * Handle the Shoe "restored" event.
     */
    public function restored(Shoe $shoe)
    {
        //
    }

    /**
     * Handle the Shoe "force deleted" event.
     */
    public function forceDeleted(Shoe $shoe)
    {
        //
    }
}
