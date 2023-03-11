<?php
/**
 * 2019 Typper
 */

namespace Typper;

/**
 * Typper Router
 */
class Router
{
    /**
     * The page path
     * 
     * @var string
     */
    protected $path;

    /**
     * The articles loader
     *
     * @var Loader
     */
    protected $loader;

    /**
     * Router constructor
     * 
     * @param string $path
     */
    public function __construct(string $path)
    {
        $this->path = $path;
        $this->loader = new Loader();
    }

    /**
     * Sets the path to load and returns self
     * 
     * @param string $path
     * @return self
     */
    public function setPath(string $path): self
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Routes the page from the url
     * 
     * @return self
     */
    public static function fromUrl(): self
    {
        // Gets the article path from url
        $currentDirectory = dirname($_SERVER['SCRIPT_NAME']);
        $path = trim(str_replace($currentDirectory, '', $_SERVER["REQUEST_URI"]), '/');

        return new self($path);
    }

    /**
     * Routes the page from a given path
     * 
     * @param string $path
     * @return self
     */
    public static function fromString(string $path): self
    {
        return new self($path);
    }

    /**
     * Loads an route and return as string
     * 
     * @return string
     */
    public function load(): string
    {
        return $this->loader->load($this->path);
    }
}