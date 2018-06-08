<?php

/**
 * 
 * Front controller of the app
 * there goes every user's request
 * 
 */

/**
 * Including composer autoload
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Including development utilites.
 * !!Comment on production!!
 */
require __DIR__ . '/../vendor/Dev.php';

(app\Application::getInstance())->run();