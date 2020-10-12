<?php
declare(strict_types=1);

namespace Jcsp\Event\Annotation\Mapping;

class EventRegister
{

    /**
     * @var array
     */
    private static $eventData=[];

    public static function reister(string $event):void
    {
        self::$eventData[] = $event;
    }

    public static function getEventData(): array
    {
        return self::$eventData;
    }

}