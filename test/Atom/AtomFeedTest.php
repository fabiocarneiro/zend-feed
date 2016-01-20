<?php

namespace ZendTest\Feed\Atom;

use PHPUnit_Framework_TestCase as TestCase;
use Zend\Feed\Atom\AtomAttributes;
use Zend\Feed\Atom\AtomCommonAttributes;
use Zend\Feed\Atom\AtomFeed;
use Zend\Feed\Atom\AtomIdAttribute;
use Zend\Feed\Atom\AtomTitleAttribute;
use Zend\Feed\Atom\AtomUpdatedAttribute;

class AtomFeedTest extends TestCase
{
    public function testCanCreateFeed()
    {
        new AtomFeed(
            new AtomCommonAttributes('http://diveintomark.org/', 'en'),
            new AtomAttributes(
                new AtomIdAttribute('tag:example.org,2003:3'),
                new AtomTitleAttribute('dive into mark'),
                new AtomUpdatedAttribute('2005-07-31T12:29:29Z')
            ),
            []
        );
    }

    public function testCanCreateFeedWithCustomAttribute()
    {
        new AtomFeed(
            new AtomCommonAttributes('http://diveintomark.org/', 'en'),
            new AtomAttributes(
                new AtomIdAttribute('tag:example.org,2003:3'),
                new AtomTitleAttribute('dive into mark'),
                new AtomUpdatedAttribute('2005-07-31T12:29:29Z')
            ),
            []
        );
    }
}
