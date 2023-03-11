<?php
/**
 * 2019 Typper
 * Helper for configurations
 */

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