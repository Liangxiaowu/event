<?php
declare(strict_types=1);
namespace Jcsp\Event\Consumer;

use Swoft\Process\Process;
use Swoft\Process\UserProcess;
use Swoft\Bean\Annotation\Mapping\Bean;

/**
 * @Bean()
 * Class EventConsumer
 * @package Jcsp\Event\Consumer
 */
class EventConsumer extends UserProcess
{

    public function run(Process $process):void {
        var_dump(11111);
        \Swoole\Coroutine::sleep(10);
    }

}
