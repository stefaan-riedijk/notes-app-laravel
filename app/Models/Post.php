<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['title','body','is_published'];


    protected $casts = [
        'is_published' => 'boolean',
    ];
    
    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function recipients() : HasMany {
        return $this->hasMany(Recipient::class);
    }

    public function users() : BelongsTo {
        return $this->belongsTo(User::class);
    }

}
