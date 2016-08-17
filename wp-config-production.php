<?php

/* DEBUG */
define( 'WP_DEBUG',         false );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG',     false );
define( 'SAVEQUERIES',      false );

/* SECURITY */
define( 'FORCE_SSL_ADMIN',    false );

/* AUTOSAVE, REVISIONS, TRASH */
define( 'AUTOSAVE_INTERVAL', '300' );
define( 'WP_POST_REVISIONS', 10 );
define( 'MEDIA_TRASH',       false );
define( 'EMPTY_TRASH_DAYS',  '50' );

/* HIDE ACF MENU */
define( 'ACF_LITE', true );

/* WP-CRON */
define( 'DISABLE_WP_CRON',      false );
define( 'ALTERNATE_WP_CRON',    false );
define( 'WP_CRON_LOCK_TIMEOUT', 60 );
