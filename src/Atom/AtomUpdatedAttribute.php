<?php

namespace Zend\Feed\Atom;

class AtomUpdatedAttribute
{
    private $datetime;

    public function __construct($datetime)
    {
        $this->datetime = $datetime;
    }

    public function __toString()
    {
        return $this->datetime;
    }
}
