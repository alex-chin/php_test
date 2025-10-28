<?php

interface NotificationInterface
{
    public function send(string $message): bool;

}


class NotificationPrint implements NotificationInterface
{

    public function send(string $message): bool
    {
        echo $message;
        return true;
    }
}

class OrderService

{
    private array $notifiers;

    public function __construct(...$notifiers)
    {
        $this->notifiers = $notifiers;
    }

    public function createOrder(array $order_data)
    {
        $message = "Your order {$order_data['id']} has been placed";
        foreach ($this->notifiers as $notifier) {
            $notifier->send($message);
        }
    }

}

$order_data = array();
$order_data['id'] = 111;
$notifier1 = new NotificationPrint();
$notifier2 = new NotificationPrint();
$orderService = new OrderService($notifier1, $notifier2);
$orderService->createOrder($order_data);

