<?php

namespace Zend\Feed\Atom;

class AtomCategoryAttribute
{
    /**
     * @var string
     */
    private $term;

    /**
     * @var null|string
     */
    private $uri;

    /**
     * @var null|string
     */
    private $text;

    /**
     * @param string $term
     * @param null|string $uri
     * @param null|string $text
     */
    public function __construct($term, $uri = null, $text = null)
    {
        $this->term = $term;
        $this->uri  = $uri;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * @return null|string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        return $this->text;
    }
}
