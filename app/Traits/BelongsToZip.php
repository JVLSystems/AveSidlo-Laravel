<?php

namespace App\Traits;

use App\Models\EnumZip;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToZip {

    /**
     * @return BelongsTo
     */
    public function zip(): BelongsTo
    {
        return $this->belongsTo(EnumZip::class);
    }

}
