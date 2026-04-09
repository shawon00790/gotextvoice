<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'product_name',
        'slug',
        'description',
        'price',
        'image',
        'status',
        'stock',
        'quantity',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function features()
    {
        return $this->hasMany(feature::class);
    }
}
