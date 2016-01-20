<?php

namespace Zend\Feed\Atom;

class AtomGeneratorAttribute implements TextAttributeInterface
{
    /**
     * @var string
     */
    private $text;

    /**
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    public function __toString()
    {
        return $this->text;
    }

    public function getType()
    {
        return null;
    }
}
