<?php

namespace Zend\Feed\Atom;

interface TextAttributeInterface
{
    public function __toString();

    public function getType();
}
