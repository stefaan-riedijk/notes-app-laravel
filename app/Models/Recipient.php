<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recipient extends Model
{
    use HasFactory;

    public function post() : BelongsTo {
        return $this->belongsTo(Post::class);
    }
}
