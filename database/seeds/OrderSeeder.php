<?php

use App\Models\OrderItem\OrderItem;
use App\Models\Order\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order::class, 100)->create()->each(function ($order) {
            factory(OrderItem::class, 2)->create([
                'order_id' => $order->id,
            ])->each(function ($order_item) {
                $order_item->deliveries()->create([
                    'order_item_id' => $order_item->id,
                    'quantity' => rand(0, $order_item->quantity),
                ]);
            });
        });
    }
}
