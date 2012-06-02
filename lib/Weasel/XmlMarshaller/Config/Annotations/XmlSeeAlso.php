<?php
namespace Weasel\XmlMarshaller\Config\Annotations;

use Weasel\Annotation\Config\Annotations\Annotation;
use Weasel\Annotation\Config\Annotations\AnnotationCreator;
use Weasel\Annotation\Config\Annotations\Parameter;

/**
 * The list of subtypes of this base class
 * @Annotation(on={"class"})
 */
class XmlSeeAlso
{

    protected $value;

    /**
     * @param string[] $value
     * @AnnotationCreator({@Parameter(name="value", type="string[]", required=true)})
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return string[]
     */
    public function getValue()
    {
        return $this->value;
    }

}

