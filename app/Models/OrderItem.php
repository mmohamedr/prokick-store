<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;

class OrderItem extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    /**
     * The order that this item belongs to.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * The product associated with this order item.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
