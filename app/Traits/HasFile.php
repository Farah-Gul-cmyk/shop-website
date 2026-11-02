<?php

namespace App\Traits;

use App\Models\File;

trait HasFile
{
    
    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }

    
    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}