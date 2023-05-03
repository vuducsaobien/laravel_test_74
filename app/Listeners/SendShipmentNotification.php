<?php

namespace App\Listeners;

use App\Events\OrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendShipmentNotification
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
     * @param  OrderShipped  $event
     * @return void
     */
    public function handle(OrderShipped $event)
    {
        // echo '<pre style="color:red";>$event === '; print_r($event);echo '</pre>';
        // Gửi thông báo cho khách hàng rằng đơn hàng đã được vận chuyển thành công
        // $customer = $event->order->customer;
        $customer = $event->order;

        echo '<pre style="color:red";>$customer === '; print_r($customer);echo '</pre>';

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
