<?php

namespace ZendTest\Feed\Atom;

use PHPUnit_Framework_TestCase as TestCase;
use Zend\Feed\Atom\CommonAttributes;
use Zend\Feed\Atom\AtomFeed;
use Zend\Feed\Atom\AtomIdAttribute;
use Zend\Feed\Atom\AtomTitleAttribute;
use Zend\Feed\Atom\AtomUpdatedAttribute;
use Zend\Feed\Exception\MissingAttributeException;

class AtomFeedTest extends TestCase
{
    public function testCanCreateFeed()
    {
        new AtomFeed(
            new CommonAttributes('http://diveintomark.org/', 'en'),
            [
                new AtomIdAttribute('tag:example.org,2003:3'),
                new AtomTitleAttribute('dive into mark'),
                new AtomUpdatedAttribute('2005-07-31T12:29:29Z'),
            ],
            []
        );
    }

    public function testCanCreateFeedWithoutId()
    {
        $this->setExpectedException(MissingAttributeException::class);
        new AtomFeed(
            new CommonAttributes('http://diveintomark.org/', 'en'),
            [
                new AtomTitleAttribute('dive into mark'),
                new AtomUpdatedAttribute('2005-07-31T12:29:29Z'),
            ],
            []
        );
    }

    public function testCanCreateFeedWithoutTitle()
    {
        $this->setExpectedException(MissingAttributeException::class);
        new AtomFeed(
            new CommonAttributes('http://diveintomark.org/', 'en'),
            [
                new AtomIdAttribute('tag:example.org,2003:3'),
                new AtomUpdatedAttribute('2005-07-31T12:29:29Z'),
            ],
            []
        );
    }

    public function testCanCreateFeedWithoutUpdated()
    {
        $this->setExpectedException(MissingAttributeException::class);
        new AtomFeed(
            new CommonAttributes('http://diveintomark.org/', 'en'),
            [
                new AtomIdAttribute('tag:example.org,2003:3'),
                new AtomTitleAttribute('dive into mark'),
            ],
            []
        );
    }
}
