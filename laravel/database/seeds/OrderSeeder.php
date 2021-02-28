<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Food;
use App\User;



class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order::class, 50)->create()->each(function ($order) {
            $user = User::inRandomOrder()->first();
            $food = Food::where('user_id', $user -> id)->inRandomOrder()->limit(rand(1, 5))->get();
            $order->food()->attach($food);
        });
    }
}
