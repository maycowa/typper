<?php
/**
 * 2019 Typper
 * Helper functions and constants
 */

use Cocur\Slugify\Slugify;
use Typper\Config;

/**
 * Gets a configuration
 *
 * @param string $key
 * @return mixed
 */
function config(string $key)
{
    return Config::get($key);
}

/**
 * Slugify a given text
 *
 * @param string $string
 * @return string
 */
function slugify(string $string): string
{
    $slugify = new Slugify();
    return $slugify->slugify($string);
}

/**
 * Gets the category part of a given slug
 *
 * @param string $slug
 * @return string
 */
function getCategoryFromSlug(string $slug): string
{
    $slugArray = explode('/', $slug);
    unset($slugArray[count($slugArray) - 1]);
    return implode('/', $slugArray);
}