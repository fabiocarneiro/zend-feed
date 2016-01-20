<?php

namespace Zend\Feed\Atom;

use Zend\Feed\Exception\InvalidAttributeException;

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

    /**
     * @var null|AtomGeneratorAttribute
     */
    private $generator;

    /**
     * @var null|AtomIconAttribute
     */
    private $icon;

    /**
     * @var null|AtomLogoAttribute
     */
    private $logo;

    /**
     * @var null|AtomRightsAttribute
     */
    private $rights;

    /**
     * @var null|AtomSubtitleAttribute
     */
    private $subtitle;

    /**
     * @var AtomLinkAttribute[]
     */
    private $links;

    /**
     * @var AtomAuthorAttribute[]
     */
    private $authors;

    /**
     * @var AtomCategoryAttribute[]
     */
    private $categories;

    /**
     * @var AtomContributorAttribute[]
     */
    private $contributors;

    /**
     * @var AtomExtensionInterface[]
     */
    private $extensions;

    /**
     * AtomAttributes constructor.
     * @param AtomIdAttribute $id
     * @param AtomTitleAttribute $title
     * @param AtomUpdatedAttribute $updated
     * @param AtomGeneratorAttribute|null $generator
     * @param AtomIconAttribute|null $icon
     * @param AtomLogoAttribute|null $logo
     * @param AtomRightsAttribute|null $rights
     * @param AtomSubtitleAttribute|null $subtitle
     * @param AtomLinkAttribute[] $links
     * @param AtomAuthorAttribute[] $authors
     * @param AtomCategoryAttribute[] $categories
     * @param AtomContributorAttribute[] $contributors
     * @param AtomExtensionInterface[] $extensions
     */
    public function __construct(
        AtomIdAttribute $id,
        AtomTitleAttribute $title,
        AtomUpdatedAttribute $updated,
        AtomGeneratorAttribute $generator = null,
        AtomIconAttribute $icon = null,
        AtomLogoAttribute $logo = null,
        AtomRightsAttribute $rights = null,
        AtomSubtitleAttribute $subtitle = null,
        array $links = [],
        array $authors = [],
        array $categories = [],
        array $contributors = [],
        array $extensions = []
    ) {
        array_map([$this, 'validateLinkAttribute'], $links);
        array_map([$this, 'validateAuthorAttribute'], $links);
        array_map([$this, 'validateCategoryAttribute'], $links);
        array_map([$this, 'validateContributorAttribute'], $links);
        array_map([$this, 'validateExtensionAttribute'], $links);

        $this->id           = $id;
        $this->title        = $title;
        $this->updated      = $updated;
        $this->generator    = $generator;
        $this->icon         = $icon;
        $this->logo         = $logo;
        $this->rights       = $rights;
        $this->subtitle     = $subtitle;
        $this->links        = $links;
        $this->authors      = $authors;
        $this->categories   = $categories;
        $this->contributors = $contributors;
        $this->extensions   = $extensions;
    }

    private function validateLinkAttribute($attribute)
    {
        if ($attribute instanceof AtomLinkAttribute) {
            return;
        }

        throw new InvalidAttributeException;
    }

    private function validateAuthorAttribute($attribute)
    {
        if ($attribute instanceof AtomAuthorAttribute) {
            return;
        }

        throw new InvalidAttributeException;
    }

    private function validateCategoryAttribute($attribute)
    {
        if ($attribute instanceof AtomCategoryAttribute) {
            return;
        }

        throw new InvalidAttributeException;
    }

    private function validateContributorAttribute($attribute)
    {
        if ($attribute instanceof AtomContributorAttribute) {
            return;
        }

        throw new InvalidAttributeException;
    }

    private function validateExtensionAttribute($attribute)
    {
        if ($attribute instanceof AtomExtensionInterface) {
            return;
        }

        throw new InvalidAttributeException;
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

    /**
     * @return null|AtomGeneratorAttribute
     */
    public function getGenerator()
    {
        return $this->generator;
    }

    /**
     * @return null|AtomIconAttribute
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return null|AtomLogoAttribute
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @return null|AtomRightsAttribute
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * @return null|AtomSubtitleAttribute
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @return AtomLinkAttribute[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @return AtomAuthorAttribute[]
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * @return AtomCategoryAttribute[]
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @return AtomContributorAttribute[]
     */
    public function getContributors()
    {
        return $this->contributors;
    }

    /**
     * @return AtomExtensionInterface[]
     */
    public function getExtensions()
    {
        return $this->extensions;
    }
}
