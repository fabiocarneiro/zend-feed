<?php

namespace Zend\Feed\Atom;

class AtomRightsAttribute implements TextAttributeInterface
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

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->text;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        return null;
    }
}
