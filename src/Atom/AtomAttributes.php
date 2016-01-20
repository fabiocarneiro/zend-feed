<?php

namespace Zend\Feed\Atom;

class AtomAttributes
{
    /**
     * @var AtomIdAttribute
     */
    private $id;

    /**
     * @var AtomTitleAttribute
     */
    private $title;

    /**
     * @var AtomUpdatedAttribute
     */
    private $updated;

    public function __construct(
        AtomIdAttribute $id,
        AtomTitleAttribute $title,
        AtomUpdatedAttribute $updated
    ) {
        $this->id      = $id;
        $this->title   = $title;
        $this->updated = $updated;
    }

    /**
     * @return AtomIdAttribute
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return AtomTitleAttribute
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return AtomUpdatedAttribute
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
