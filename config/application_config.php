<?php
/**
 * 2019 Typper
 * This file contains the application configuration. Change it's values to change the 
 * default behaviour
 */
return [
    // Defines the cache driver used on Stash. Default: FileSystem 
    'cacheDriver' => \Stash\Driver\FileSystem::class,
    // Defines the cache options for Stash driver
    'cacheOptions' => [
        // Path for cache folder for articles and pages when using FileSystem as cache driver
        'path' => 'cache',
    ],
    // The path where all articles and pages will be stored
    'articlesPath' => 'articles',
];