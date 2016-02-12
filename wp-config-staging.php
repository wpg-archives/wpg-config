<?php

/* DATABASE */
define( 'DB_NAME',     'staging' );
define( 'DB_USER',     'username' );
define( 'DB_PASSWORD', 'password' );
define( 'DB_HOST',     'localhost' );

/* DEBUG */
define( 'WP_DEBUG',         false );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG',     false );

/* SECURITY */
define( 'FORCE_SSL_ADMIN',    false );

/* AUTOSAVE, REVISIONS, TRASH */
define( 'AUTOSAVE_INTERVAL', '300' );
define( 'WP_POST_REVISIONS', false );
define( 'MEDIA_TRASH',       false );
define( 'EMPTY_TRASH_DAYS',  '50' );

/* HIDE ACF MENU */
define( 'ACF_LITE', true );
