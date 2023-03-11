<?php
/**
 * 2019 Typper
 */

namespace Typper\Router;


class Router
{
    /**
     * @var array
     */
    protected $options;

    /**
     * @var string
     */
    protected $path;

    /**
     * Router constructor.
     * @param string $path
     * @param array $options
     */
    public function __construct(string $path, array $options)
    {
        $this->path = $path;
        $this->options = $options;
        $this->driver = new \Stash\Driver\FileSystem();
    }

    /**
     * Boots the router
     */
    public static function boot()
    {
        // Gets the article path from url
        $currentDirectory = dirname($_SERVER['SCRIPT_NAME']);
        $path = trim(str_replace($currentDirectory, '', $_SERVER["REQUEST_URI"]), '/');

        return new self($path, [
            'cacheFolder' => 'cache',
        ]);
    }

    public function load()
    {
        if (!file_exists("{$this->options['cacheFolder']}/{$this->path}.html")) {

        }
    }
}