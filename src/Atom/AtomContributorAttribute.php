<?php

namespace Zend\Feed\Atom;

class AtomContributorAttribute
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var null|string
     */
    private $uri;

    /**
     * @var null|string
     */
    private $emailAddress;

    /**
     * @param string $name
     * @param null|string $uri
     * @param null|string $emailAddress
     */
    public function __construct($name, $uri = null, $emailAddress = null)
    {
        $this->name         = $name;
        $this->uri          = $uri;
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
}
