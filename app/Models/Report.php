<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Report extends Model
{
    protected $guarded = [];

    use SoftDeletes;

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    
    public function status():BelongsTo
    {
        return $this->belongsTo(Status::class);
    } 
}
