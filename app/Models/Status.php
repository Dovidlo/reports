<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

class Status extends Model
{
    public function reports():HasMany
    {
        return $this->hasMany(Report::class);
    }
    
}
