<?php

/* ENVIRONMENTS */
$envs = [
  'development' => 'http://127.0.0.1/dev/foobar/myproject',
  'staging'     => 'http://staging.example.com',
  'production'  => 'http://example.com'
];
define('ENVIRONMENTS', serialize($envs));

/* DATABASE */
define( 'DB_CHARSET',  'utf8' );
define( 'DB_COLLATE',  '' );
$table_prefix  =       'wp_';

/* THEME */
define( 'WP_DEFAULT_THEME', 'mytheme' );

/* UPDATES */
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE',        false );

/* SECURITY */
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );

/* MEMORY */
define( 'WP_MEMORY_LIMIT', '128M' );

/* PERFORMANCES */	
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );

/* WP-CRON */
define( 'DISABLE_WP_CRON',      false );
define( 'ALTERNATE_WP_CRON',    false );
define( 'WP_CRON_LOCK_TIMEOUT', 60 );

if( empty( $envs[ WP_ENV ] ) ) {
	die( 'You must declare your environment in wp-config-common.php' );
}

/* DIRECTORIES */
define( 'WP_DIR',          ABSPATH );
define( 'WP_URL',          $envs[ WP_ENV ] );
define( 'WP_CONTENT_DIR',  WP_DIR . 'app' );
define( 'WP_CONTENT_URL',  WP_URL . '/app' );
define( 'WP_PLUGIN_DIR',   WP_CONTENT_DIR . '/modules' );
define( 'WP_PLUGIN_URL',   WP_CONTENT_URL . '/modules' );
define( 'WPMU_PLUGIN_DIR', WP_CONTENT_DIR . '/mu-modules' );
define( 'WPMU_PLUGIN_URL', WP_CONTENT_URL . '/mu-modules' );
/*define( 'WP_THEME_DIR',    WP_CONTENT_DIR . '/view' );*/
/*define( 'WP_THEME_URL',    WP_CONTENT_URL . '/view' );*/
define( 'UPLOADS',        'media' );

/* GOOGLE ANALYTICS */
define( 'GOOGLE_ANALYTICS_CODE', 'UA-XXXXX-Y' );

/* SALT KEYS */
/* @see https://api.wordpress.org/secret-key/1.1/salt/ */
