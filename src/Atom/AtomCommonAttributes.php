<?php

namespace Zend\Feed\Atom;

class AtomCommonAttributes
{
    private $base;
    private $lang;

    public function __construct($base, $lang)
    {
        $this->base = $base;
        $this->lang = $lang;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function getLang()
    {
        return $this->lang;
    }
}
