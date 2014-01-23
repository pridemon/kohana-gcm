<?php defined('SYSPATH') or die('No direct script access.');

class GCMServer_Core extends \PHP_GCM\Sender {

    public function __construct()
    {
        return parent::__construct(Kohana::$config->load('gcm')->api_key);
    }

}