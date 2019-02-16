<?php
 /**
 * Composer modifications
 */
require_once dirname(__DIR__) .'/vendor/autoload.php';

/**
 * Tells the dotenv package to load the .env file
 * from the directory just above the current.
 */
$dotenv = Dotenv\Dotenv::create(dirname(__DIR__));
$dotenv->load();

/**
 * The base configuration for WordPress
 */

require_once (dirname(__DIR__) . '/config.php');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
