<?php

define('PATH_SYSTEM', __DIR__ .'/system');
define('PATH_APPLICATION', __DIR__ . '/app');
define('PATH_LIBRARY', __DIR__ . '/system/library');
define('PATH_CORE', __DIR__ . '/system/core');
define('PATH_PROJECT', __DIR__ );
require_once(__DIR__ . "/system/core/loader.php");

$loader = new Loader();
$loader->_load();
