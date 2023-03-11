#!/usr/bin/php
<?php

include_once "vendor/autoload.php";

use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;
use Typper\Loader;

class Typper extends CLI
{
    protected function setup(Options $options)
    {
        $options->setHelp('A minimalistic cli and markdown-based cms');
        $options->registerOption('clear', 'Clear all caches', 'c');
        $options->registerCommand('delete', 'Delete a file cache');
        $options->registerArgument('file', 'The path of the content to delete it\'s cache', true, 'delete');
    }

    protected function main(Options $options)
    {
        if ($options->getCmd('delete')) {
            
            $args = $options->getArgs();
            $loader = new Loader;
            $deleted = $loader->deleteCache($args[0]);
            if ($deleted) {
                echo "Cache of the file {$args[0]} deleted!\n";
            } else {
                echo "Something wrong happened deleting the cache file\n";
            }
            
            exit;
        }

        if ($options->getOpt('clear')) {
            $loader = new Loader;
            $loader->clear();
            echo "Cache cleared!\n";
        } else {
            echo $options->help();
        }
    }
}

$cli = new Typper();
$cli->run();