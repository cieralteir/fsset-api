<?php

namespace App\Models\OrderItem;

use App\Models\Delivery\Delivery;
use App\Models\Order\Order;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'price_per_unit',
        'quantity',
        'product',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function deliveries()
    {
        return $this->hasMany(Delivery::class);
    }
}
