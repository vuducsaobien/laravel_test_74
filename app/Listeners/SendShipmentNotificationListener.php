<?php

namespace App\Listeners;

use App\Events\OrderShippedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendShipmentNotificationListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderShippedEvent  $event
     * @return void
     */
    public function handle(OrderShippedEvent $event)
    {
        // echo '<pre style="color:red";>$event === '; print_r($event);echo '</pre>';
        // Gửi thông báo cho khách hàng rằng đơn hàng đã được vận chuyển thành công
        // $customer = $event->order->customer;
        $customer = $event->orderSent;

        $orderIdSent = $event->orderIdSent;


        $allOrder = $customer->name;

        echo '<pre style="color:red";>$event === '; print_r($event);echo '</pre>';
        echo '<pre style="color:red";>$customer === '; print_r($customer);echo '</pre>';
        echo '<pre style="color:red";>$allOrder === '; print_r($allOrder);echo '</pre>';
        echo '<pre style="color:red";>$orderIdSent === '; print_r($orderIdSent);echo '</pre>';

        echo '<h3>Die is Called - 121</h3>';die;

        $message = "Đơn hàng của bạn đã được vận chuyển thành công";
        $this->sendNotification($customer, $message);
    }

    private function sendNotification($recipient, $message)
    {
        // Gửi thông báo đến khách hàng
        $message = "sendNotification Success !";
        echo '<pre style="color:red";>$message === '; print_r($message);echo '</pre>';

    }
}
