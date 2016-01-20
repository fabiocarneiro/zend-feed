<?php

namespace Zend\Feed\Atom;

class AtomFeed
{
    /**
     * @var AtomCommonAttributes
     */
    private $commonAttributes;

    /**
     * @var AtomAttributes
     */
    private $attributes;

    /**
     * @var array
     */
    private $entries;

    public function __construct(
        AtomCommonAttributes $commonAttributes,
        AtomAttributes $attributes,
        array $entries
    ) {
        $this->commonAttributes = $commonAttributes;
        $this->attributes       = $attributes;
        $this->entries          = $entries;
    }

    /**
     * @return AtomCommonAttributes
     */
    public function getCommonAttributes()
    {
        return $this->commonAttributes;
    }

    /**
     * @return AtomAttributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return array
     */
    public function getEntries()
    {
        return $this->entries;
    }
}
