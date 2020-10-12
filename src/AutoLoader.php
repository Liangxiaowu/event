<?php declare(strict_types=1);

namespace Jcsp\Event;

use Jcsp\Event\Consumer\EventConsumer;
use Swoft\Helper\ComposerJSON;
use Swoft\Rpc\Server\ServiceDispatcher;
use Swoft\Rpc\Server\ServiceServer;
use Swoft\SwoftComponent;
use function dirname;

/**
 * class AutoLoader
 * @since 2.0
 */
final class AutoLoader extends SwoftComponent
{
    /**
     * @return bool
     */
    public function enable(): bool
    {
        return true;
    }

    /**
     * Get namespace and dirs
     *
     * @return array
     */
    public function getPrefixDirs(): array
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }

    /**
     * Metadata information for the component
     *
     * @return array
     */
    public function metadata(): array
    {
        $jsonFile = dirname(__DIR__) . '/composer.json';

        return ComposerJSON::open($jsonFile)->getMetadata();
    }

    /**
     * {@inheritDoc}
     */
    public function beans(): array
    {
        return [
            'rpcServer' => [
                'class' => ServiceServer::class,
                'process' => [
                    'eventConsumer'=>bean(EventConsumer::class),
                ]
            ],
        ];
    }
}
