<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasFile;

class Category extends Model
{
    use HasFactory, HasFile;

    protected $fillable = ['name', 'slug', 'status'];
}
