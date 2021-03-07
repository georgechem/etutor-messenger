<?php


namespace App\MessageHandler;


use App\Message\OrderConfirmationEmail;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class OrderConfirmationEmailHandler implements MessageHandlerInterface
{
    public function __invoke(OrderConfirmationEmail $orderConfirmationEmail)
    {
         // TODO: Implement all work here
        sleep(5);
        echo  'Sending email now ...';
    }
}
