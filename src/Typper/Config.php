<?php
/**
 * 2009 Typper
 */
namespace Typper;

use Symfony\Component\Yaml\Yaml;

/**
 * Defines the Configuration for the application
 */
class Config
{
    /**
     * Stores all the application configurations
     * 
     * @var array
     */
    protected $config;
    
    /**
     * Stores all the editorial configuration
     * 
     * @var array
     */
    protected $editorial;

    /**
     * Config singleton instance
     * 
     * @var self
     */
    static $instance;

    /**
     * Config Class Constructor
     */
    public function __construct()
    {
        $this->config = include('config/application_config.php');
        $this->editorial = Yaml::parseFile('config/editorial.yaml');
    }

    /**
     * Gets the Config singleton
     * 
     * @return self
     */
    public function singleton(): self
    {
        if (empty(static::$instance)) {
            static::$instance = new self();
        }
        return static::$instance;
    }

    /**
     * Gets a configuration
     * 
     * @param string $key
     * @return mixed
     */
    public static function get(string $key)
    {
        return self::singleton()->config[$key] ?? self::singleton()->editorial[$key] ?? null;
    } 
}

