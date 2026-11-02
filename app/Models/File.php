<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['path', 'url', 'fileable_id', 'fileable_type'];

    public function fileable()
    {
        return $this->morphTo();
    }

    
    public function getImageUrlAttribute(): string
    {
        return asset('assets/img/' . $this->path);
    }
}