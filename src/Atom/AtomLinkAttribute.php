<?php

namespace Zend\Feed\Atom;

class AtomLinkAttribute
{
    /**
     * @var string
     */
    private $uri;

    /**
     * @param string $uri
     */
    public function __construct($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return string $uri
     */
    public function getUri()
    {
        return $this->uri;
    }
}
