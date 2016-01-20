<?php

namespace Zend\Feed\Atom\Renderer;

use Zend\Feed\Atom\AtomFeed;

interface RendererInterface
{
    public function render(AtomFeed $feed);
}
