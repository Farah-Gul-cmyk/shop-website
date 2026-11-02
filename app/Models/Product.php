<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\HasFile;

class Product extends Model
{
    use HasFactory, HasFile;

    protected $fillable = ['name', 'slug', 'price', 'description', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}