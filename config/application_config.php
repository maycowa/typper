<?php
/**
 * 2021 Typper
 * This file contains the application configuration. Change it's values to change the 
 * default behaviour
 */
return [
    // Sets the configuration of the cache system
    'cache' => [
        // Defines the cache driver used on Stash. Default: FileSystem 
        'driver' => \Stash\Driver\FileSystem::class,
        // Defines the cache options for Stash driver
        'options' => [
            // Path for cache folder for articles and pages when using FileSystem as cache driver
            'path' => 'cache',
        ],
    ],
    // Sets the configuration of the parser system
    // You may want to check Kurenai's documentation for more information about parsers:
    // https://github.com/daylerees/kurenai
    'parser' => [
        // Defines the parser for metadata block of the contents (articles and pages)
        // Typper default parser for metadata is YamlParser, using symfony/yaml as the parser.
        // If you want to use another parser, you may want to include it on composer.json.
        // JsonParser also can be used without including any package
        'metadataParser' => \Kurenai\Parsers\Metadata\YamlParser::class,
        // Defines the parser for the content block of the contents (articles and pages)
        // as the parser. If you want to use another parser, you may want to include it on composer.json
        // Typper default parser for content is ParseDownExtraParser, a custom parser based on
        // erusev/parsedown-extra
        'contentParser' => \Typper\Parsers\Content\ParseDownExtraParser::class,
    ],
    // Sets the configuration of the app at all
    'app' => [
        // The path where all articles and pages will be stored
        'contentsPath' => 'contents',
        // The path to the available themes folder
        'themesPath' => 'themes',
        // The path to the public folder to store files and data
        'publicPath' => 'public',
        // The Content class definition
        'content' => \Typper\Content::class,
        // The Category class definition
        'category' => \Typper\Category::class,
        // The ThemeManager class definition
        'themeManager' => \Typper\ThemeManager::class,
    ]    
];