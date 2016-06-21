<?php

/* DEBUG */
define( 'WP_DEBUG',         true );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG',     true );
define( 'SAVEQUERIES',      true );

/* SECURITY */
define( 'FORCE_SSL_ADMIN',    false );

/* AUTOSAVE, REVISIONS, TRASH */
define( 'AUTOSAVE_INTERVAL', '600' );
define( 'WP_POST_REVISIONS', false );
define( 'MEDIA_TRASH',       false );
define( 'EMPTY_TRASH_DAYS',  '50' );

/* HIDE ACF MENU */
define( 'ACF_LITE', false );
