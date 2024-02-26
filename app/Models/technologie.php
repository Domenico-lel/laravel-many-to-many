<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class technologie extends Model
{
    use HasFactory;

    public function projects()
    {
        return $this->belongsToMany(technology::class);
    }
}
