<?php
declare(strict_types=1);
namespace Jcsp\Event\Annotation\Mapping;

use Doctrine\Common\Annotations\Annotation\Attribute;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * HTTP action method annotation
 *
 * @Annotation
 * @Target({"CLASS"})
 * @Attributes({
 *      @Attribute("event", type="string"),
 * })
 *
 * @since 2.0
 */
final class ProducerEvent
{

    /**
     * @var string
     */
    private $event='';


    /**
     * ProducerEvent constructor.
     * @param array $values
     */
    public function __construct(array $values)
    {
        if (isset($values['value'])) {
            $this->event = $values['value'];
        } elseif (isset($values['event'])) {
            $this->event = $values['event'];
        }
    }

    /**
     * @return string
     */
    public function getEvent(): string
    {
        return $this->event;
    }
    
    
}