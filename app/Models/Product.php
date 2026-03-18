<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category',
    ];

    /**
     * Cast attributes to their native types.
     */
    protected $casts = [
        'price' => 'decimal:2',
    ];

    /**
     * Order items that include this product.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
