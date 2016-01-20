<?php

namespace Zend\Feed\Atom;

class AtomTitleAttribute implements TextAttributeInterface
{
    /**
     * @var string
     */
    private $text;
    /**
     * @var null
     */
    private $type;

    /**
     * @param string $text
     * @param null|string $type
     */
    public function __construct($text, $type = null)
    {
        $this->text = $text;
        $this->type = $type;
    }

    public function __toString()
    {
        return $this->text;
    }

    public function getType()
    {
        return $this->type;
    }
}
