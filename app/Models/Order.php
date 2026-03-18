<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'address',
        'total_price',
    ];

    /**
     * Cast the total price as decimal.
     */
    protected $casts = [
        'total_price' => 'decimal:2',
    ];

    /**
     * The items that belong to the order.
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
