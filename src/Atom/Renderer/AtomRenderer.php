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
        $idAttribute = $feed->getAttributes()->getId();
        $id          = $dom->createElement('id');

        if (null !== $idAttribute->getType()) {
            $id->setAttribute('type', $idAttribute->getType());
        }

        $text = $dom->createTextNode($idAttribute);
        $id->appendChild($text);
        $root->appendChild($id);
    }

    protected function renderTitle(AtomFeed $feed, DomDocument $dom, DOMElement $root)
    {
        $titleAttribute = $feed->getAttributes()->getTitle();
        $title          = $dom->createElement('title');

        if (null !== $titleAttribute->getType()) {
            $title->setAttribute('type', $titleAttribute->getType());
        }

        $text = $dom->createTextNode($titleAttribute);
        $title->appendChild($text);
        $root->appendChild($title);
    }

    protected function renderUpdated(AtomFeed $feed, DomDocument $dom, DOMElement $root)
    {
        $updated = $dom->createElement('updated');
        $text    = $dom->createTextNode($feed->getAttributes()->getUpdated());
        $updated->appendChild($text);
        $root->appendChild($updated);
    }
}
