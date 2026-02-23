<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'category',
        'description',
        'price',
        'discount_price',
        'sku',
        'stock',
        'sizes',
        'colors',
        'images',
        'main_image',
        'is_featured',
        'is_active',
        'views',
        'rating',
        'reviews_count',
    ];

    protected $casts = [
        'sizes' => 'array',
        'colors' => 'array',
        'images' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'discount_price' => 'decimal:2',
        'rating' => 'decimal:1',
    ];

    // Helper method untuk mendapatkan harga final
    public function getFinalPriceAttribute()
    {
        return $this->discount_price ?? $this->price;
    }

    // Helper method untuk cek apakah ada diskon
    public function hasDiscount()
    {
        return $this->discount_price !== null && $this->discount_price < $this->price;
    }

    // Helper method untuk mendapatkan persentase diskon
    public function getDiscountPercentageAttribute()
    {
        if (!$this->hasDiscount()) {
            return 0;
        }
        return round((($this->price - $this->discount_price) / $this->price) * 100);
    }
}
