<?php

/* STAGES */
$stages = [
  'development-<USERNAME>' => '<DEV_URL>',
  //'staging'                => '<STAGING_URL>',
  //'production'             => '<PRODUCTION_URL>'
];
define('STAGES', serialize($stages));

/* DIRECTORIES */
// If you don't define your stage in the WP_STAGE constant,
// you should define following paths in a git-ignored config file
if( !empty( $stages[ WP_STAGE ] ) ) {
	define( 'WP_DIR',          ABSPATH );
	define( 'WP_URL',          $envs[ WP_ENV ] );
	define( 'WP_CONTENT_DIR',  WP_DIR . 'app' );
	define( 'WP_CONTENT_URL',  WP_URL . '/app' );
	define( 'WP_PLUGIN_DIR',   WP_CONTENT_DIR . '/modules' );
	define( 'WP_PLUGIN_URL',   WP_CONTENT_URL . '/modules' );
	define( 'WPMU_PLUGIN_DIR', WP_CONTENT_DIR . '/mu-modules' );
	define( 'WPMU_PLUGIN_URL', WP_CONTENT_URL . '/mu-modules' );
}
define( 'UPLOADS',        'media' );

/* DATABASE */
define( 'DB_CHARSET',  'utf8' );
define( 'DB_COLLATE',  '' );
$table_prefix  =       'wp_';

/* THEME */
define( 'WP_DEFAULT_THEME', '<THEME_SLUG>' );

/* UPDATES */
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE',        false );

/* SECURITY */
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );

/* MEMORY */
define( 'WP_MEMORY_LIMIT', '256M' );

/* PERFORMANCES */	
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );

/* GOOGLE ANALYTICS */
define( 'GOOGLE_ANALYTICS_CODE', 'UA-XXXXX-Y' );

/* SALT KEYS */
/* @see https://api.wordpress.org/secret-key/1.1/salt/ */
