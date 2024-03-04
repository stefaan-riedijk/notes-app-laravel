<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory, HasUuids;
    
    protected $fillable = ['title','body','is_published'];

    public function users() : BelongsTo {
        return $this->belongsTo(User::class);
    }

}
