#!/usr/bin/php
<?php
include_once("vendor/autoload.php");

use splitbrain\phpcli\CLI;
use splitbrain\phpcli\Options;
use Typper\Loader;

class Typper extends CLI
{
    protected function setup(Options $options)
    {
        $options->setHelp('A minimalistic cli and markdown-based cms');
        $options->registerOption('clear', 'Clear all cache', 'c');
    }

    protected function main(Options $options)
    {
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