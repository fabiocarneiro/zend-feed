<?php

namespace ZendTest\Feed\Atom\Renderer;

use PHPUnit_Framework_TestCase as TestCase;
use Zend\Feed\Atom\AtomAttributes;
use Zend\Feed\Atom\AtomCommonAttributes;
use Zend\Feed\Atom\AtomFeed;
use Zend\Feed\Atom\AtomIdAttribute;
use Zend\Feed\Atom\Renderer\AtomRenderer;
use Zend\Feed\Atom\AtomTitleAttribute;
use Zend\Feed\Atom\AtomUpdatedAttribute;

class AtomRendererTest extends TestCase
{
    public function testCanRender()
    {
        $renderer = new AtomRenderer();
        $feed     = new AtomFeed(
            new AtomCommonAttributes('http://diveintomark.org/', 'en'),
            new AtomAttributes(
                new AtomIdAttribute('urn:uuid:60a76c80-d399-11d9-b93C-0003939e0af6'),
                new AtomTitleAttribute('Example Feed'),
                new AtomUpdatedAttribute('2003-12-13T18:30:02Z')
            ),
            []
        );

        $output = $renderer->render($feed);

        $expectedOutput = file_get_contents(__DIR__ . '/../Assets/minimal.atom');

        $this->assertSame($expectedOutput, $output);
    }
}
