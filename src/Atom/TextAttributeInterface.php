<?php

namespace Zend\Feed\Atom;

interface TextAttributeInterface
{
    /**
     * @return string
     */
    public function __toString();

    /**
     * @return null|string
     */
    public function getType();
}
