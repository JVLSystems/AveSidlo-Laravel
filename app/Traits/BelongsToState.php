<?php

namespace App\Traits;

use App\Models\EnumState;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToState {

    /**
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(EnumState::class);
    }

}
