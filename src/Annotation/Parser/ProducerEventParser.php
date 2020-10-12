<?php
declare(strict_types=1);

namespace Jcsp\Event\Annotation\Parser;

use Swoft\Annotation\Annotation\Parser\Parser;
use Swoft\Annotation\Annotation\Mapping\AnnotationParser;
use Jcsp\Event\Annotation\Mapping\ProducerEvent;

/**
 * @AnnotationParser(ProducerEvent::class)
 * Class ProducerEventParser
 * @package Jcsp\Event\Annotation\Parser
 */
class ProducerEventParser extends Parser
{
    public function parse(int $type, $annotationObject): array
    {
//        $annotationObject->getEvent();
    }
}