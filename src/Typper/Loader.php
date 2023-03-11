<?php
/**
 * 2019 Typper
 */

namespace Typper;

use Stash\Pool;

/**
 * Typper articles and pages Loader
 */
class Loader
{
    /**
     * Cache pool for storing articles and pages
     * 
     * @var Pool
     */
    protected $cachePool;

    /**
     * Loader constructor
     */
    public function __construct()
    {
        $driverClass = config('cacheDriver');
        $driver = new $driverClass(config('cacheOptions'));
        $this->cachePool = new Pool($driver);
    }

    /**
     * Loads a path from the cache or file and stores the cache
     * 
     * @param string $path
     * @return string
     */
    public function load(string $path): string
    {
        // If empty path is given, assumes it's the home
        if ($path == '') {
            $path = 'home';
        }

        $originalPath = $path;
        $path = slugify($path);
        
        // Gets from cache the data
        $item = $this->cachePool->getItem($path);
        // Tries to get cached data
        $data = $item->get();
        // If the item is not stored on cache, loads the data
        if($item->isMiss()){
            $item->lock();
            $data = 'teste';
            // Stores at cache the returned data
            $this->cachePool->save($item->set($data));
        }
        return $data;
    }
}

