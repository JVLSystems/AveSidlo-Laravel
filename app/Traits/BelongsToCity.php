<?php

namespace App\Traits;

use App\Models\EnumCity;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToCity {

    /**
     * @return BelongsTo
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(EnumCity::class);
    }

}
