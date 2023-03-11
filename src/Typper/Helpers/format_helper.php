<?php
/**
 * 2019 Typper
 * Helper for text format
 */
use Cocur\Slugify\Slugify;

/**
 * Slugify a given text
 *
 * @param string $string
 * @return string
 */
function slugify(string $string)
{
    $slugify = new Slugify();
    return $slugify->slugify($string);
}
