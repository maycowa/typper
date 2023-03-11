<?php
/**
 * 2019 Typper
 */

namespace Typper;

class Content
{
    /**
     * The content title
     *
     * @var string
     */
    public $title;

    /**
     * The content subtitle
     *
     * @var string
     */
    public $subtitle;

    /**
     * The content author (when different from defined on editorial.yml)
     *
     * @var string
     */
    public $author;

    /**
     * Defines if the content is published or not. Default true
     *
     * @var boolean
     */
    public $published = true;

    /**
     * The creation date of the content
     *
     * @var string
     */
    public $createdDate;

    /**
     * The publication date of the content
     *
     * @var [type]
     */
    public $publicationDate;

    /**
     * The content type. Default 'post'
     * It can be 'post' or 'page'
     *
     * @var string
     */
    public $type = 'post';

    /**
     * An array of tags for the content
     *
     * @var array
     */
    public $tags = [];
}

