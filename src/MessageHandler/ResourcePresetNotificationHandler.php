<?php
namespace App\MessageHandler;

use Symfony\Component\Messenger\Handler\MessageSubscriberInterface;
use App\Message\ResourcePresetNotification;

class ResourcePresetNotificationHandler implements MessageSubscriberInterface
{
    public static function getHandledMessages(): iterable
    {
        return array(
            ResourcePresetNotification::class => 'process',
        );
    }

    public function process(ResourcePresetNotification $message)
    {
        echo memory_get_usage( true ) . ' / ' . memory_get_usage() . PHP_EOL;
    }
}