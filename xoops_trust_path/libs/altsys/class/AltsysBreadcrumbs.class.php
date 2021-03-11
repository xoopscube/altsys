<?php

// singleton for xoops_breadcrumbs

/**
 * Class AltsysBreadcrumbs
 */
class AltsysBreadcrumbs
{
    public $paths = [];

    /**
     * AltsysBreadcrumbs constructor.
     */

    public function __construct()
    {
    }

    //HACK by domifara for php5.3+

    //function getInstance()

    /**
     * @return \AltsysBreadcrumbs
     */

    public static function getInstance()
    {
        static $instance;

        if (!isset($instance)) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * @return array
     */

    public function getXoopsBreadcrumbs()
    {
        $ret = [];

        foreach ($this->paths as $val) {
            // delayed language constant

            if ('_' == mb_substr($val['name'], 0, 1) && defined($val['name'])) {
                $ret[] = [
                    'url' => $val['url'],
                    'name' => constant($val['name']),
                ];
            } else {
                $ret[] = $val;
            }
        }

        unset($ret[count($ret) - 1]['url']);

        return $ret;
    }

    // all data should be escaped

    /**
     * @param        $url_or_path
     * @param string $name
     */

    public function appendPath($url_or_path, $name = '...')
    {
        if (is_array($url_or_path)) {
            if (empty($url_or_path['name'])) {
                // multiple paths

                $this->paths = array_merge($this->paths, $url_or_path);
            } else {
                // array format (just a path)

                $this->paths[] = $url_or_path;
            }
        } else {
            // separate format

            $this->paths[] = ['url' => $url_or_path, 'name' => $name];
        }
    }

    /**
     * @return bool
     */

    public function hasPaths()
    {
        return !empty($this->paths);
    }
}
