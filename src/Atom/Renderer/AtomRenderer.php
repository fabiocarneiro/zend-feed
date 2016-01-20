<?php

namespace Zend\Feed\Atom\Renderer;

use DOMDocument;
use DOMElement;
use Zend\Feed\Atom\AtomFeed;
use Zend\Feed\Writer\Writer;

class AtomRenderer implements RendererInterface
{
    public function render(AtomFeed $feed)
    {
        $dom               = new DOMDocument('1.0', 'utf-8');
        $dom->formatOutput = true;
        $root              = $dom->createElementNS(
            Writer::NAMESPACE_ATOM_10,
            'feed'
        );
        $dom->appendChild($root);

        $this->renderId($feed, $dom, $root);
        $this->renderTitle($feed, $dom, $root);
        $this->renderUpdated($feed, $dom, $root);

        return $dom->saveXml();
    }

    protected function renderId(AtomFeed $feed, DomDocument $dom, DOMElement $root)
    {
        $idElement = $feed->getId();
        $id        = $dom->createElement('id');

        if (null !== $idElement->getType()) {
            $id->setAttribute('type', $idElement->getType());
        }

        $text = $dom->createTextNode($idElement);
        $id->appendChild($text);
        $root->appendChild($id);
    }

    protected function renderTitle(AtomFeed $feed, DomDocument $dom, DOMElement $root)
    {
        $titleAttribute = $feed->getTitle();
        $title          = $dom->createElement('title');

        if (null !== $titleAttribute->getType()) {
            $title->setAttribute('type', $titleAttribute->getType());
        }

        $text = $dom->createTextNode($feed->getTitle());
        $title->appendChild($text);
        $root->appendChild($title);
    }

    protected function renderUpdated(AtomFeed $feed, DomDocument $dom, DOMElement $root)
    {
        $updated = $dom->createElement('updated');
        $text    = $dom->createTextNode($feed->getUpdated());
        $updated->appendChild($text);
        $root->appendChild($updated);
    }
}
