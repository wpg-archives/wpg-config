# Modification of standard WP-Config use : specify wp-config for each environment

## Installation

You can install this plugin via the command-line or the WordPress admin panel.

1. Download the [latest zip](https://github.com/wp-globalis-tools/wpg-config/archive/master.zip) of this repo.
2. Extract in your project directory
3. Rename wp-config-sample.php in wp-config.php
4. Rename wp-config/wp-config-database-sample.php in wp-config-database.php

## Configuration

Edit the following files :

### wp-config.php :

Replace development by the environment name. For example, 'production' and 'wp-config-production.php' will be include.

```php
define( 'WP_ENV', 'development' );
```
### wp-config/wp-config-common.php :

For common purpose. Add your environments here :

```php
$envs = [
  'development' => 'http://127.0.0.1/dev/foobar/myproject',
  'staging'     => 'http://staging.example.com',
  'production'  => 'http://example.com'
];
```

You can also add your Google Analytics tag here :

```php
define( 'GOOGLE_ANALYTICS_CODE', 'UA-XXXXX-Y' );
```

### wp-config/wp-config-database.php

Add your database configuration here.

```php
/* DATABASE */
define( 'DB_NAME',     'foobar_myproject' );
define( 'DB_USER',     'username' );
define( 'DB_PASSWORD', 'password' );
define( 'DB_HOST',     'localhost' );
```

### wp-config/wp-config-<environment>.php :

Files like wp-config-staging.php, wp-config-production.php, wp-config-development.php, wp-config-custom.php, etc... : Add your environment specific configuration in these files.
