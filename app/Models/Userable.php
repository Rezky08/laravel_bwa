<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Userable extends Model
{
    use HasFactory;

    /**
     * @return MorphTo
     */
    public function userable(): MorphTo
    {
        return $this->morphTo();
    }
}
