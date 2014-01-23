<?php defined('SYSPATH') or die('No direct script access.');

class GCMServer_Core {

    public function __construct()
    {
        return new \PHP_GCM\Sender( Kohana::$config->load('gcm')->api_key );
    }

}