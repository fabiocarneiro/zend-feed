<?php

namespace Zend\Feed\Atom;

use Zend\Feed\Exception\MissingAttributeException;

class AtomFeed
{
    /**
     * @var CommonAttributes
     */
    private $commonAttributes;

    /**
     * @var array
     */
    private $attributes;

    /**
     * @var array
     */
    private $entries;

    public function __construct(
        CommonAttributes $commonAttributes,
        array $attributes,
        array $entries
    ) {
        if (0 === count(array_filter($attributes, [$this, 'isIdAttribute']))) {
            throw new MissingAttributeException('Attribute Id is required');
        }

        if (0 === count(array_filter($attributes, [$this, 'isTitleAttribute']))) {
            throw new MissingAttributeException('Attribute Title is required');
        }

        if (0 === count(array_filter($attributes, [$this, 'isUpdatedAttribute']))) {
            throw new MissingAttributeException('Attribute Updated is required');
        }

        $this->commonAttributes = $commonAttributes;
        $this->attributes       = $attributes;
        $this->entries          = $entries;
    }

    /**
     * @param object $attribute
     * @return bool
     */
    private function isIdAttribute($attribute)
    {
        return $attribute instanceof AtomIdAttribute;
    }

    /**
     * @param object $attribute
     * @return bool
     */
    private function isTitleAttribute($attribute)
    {
        return $attribute instanceof AtomTitleAttribute;
    }

    /**
     * @param object $attribute
     * @return bool
     */
    private function isUpdatedAttribute($attribute)
    {
        return $attribute instanceof AtomUpdatedAttribute;
    }

    /**
     * @return AtomIdAttribute
     */
    public function getId()
    {
        $filtered = array_filter($this->attributes, [$this, 'isIdAttribute']);

        return array_shift($filtered);
    }

    /**
     * @return AtomTitleAttribute
     */
    public function getTitle()
    {
        $filtered = array_filter($this->attributes, [$this, 'isTitleAttribute']);

        return array_shift($filtered);
    }

    /**
     * @return AtomUpdatedAttribute
     */
    public function getUpdated()
    {
        $filtered = array_filter($this->attributes, [$this, 'isUpdatedAttribute']);

        return array_shift($filtered);
    }
}
