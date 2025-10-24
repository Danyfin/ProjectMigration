<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use SoftDeletes, HasFactory;
    protected $guarded = [];

    public function status():BelongsTo
    {
        return $this->belongTo(Status::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongTo(User::class);
    }
    
}



