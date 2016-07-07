# Modification of standard WP-Config use : specify wp-config for each environment

## Installation

You can install this plugin via the command-line or the WordPress admin panel.

### via Command-line

1. Download the [latest zip](https://github.com/wp-globalis-tools/wpg-config/archive/master.zip) of this repo.
2. Add the folder in your plugins directory (wp-content/plugins)
3. Activate the plugin via [wp-cli](http://wp-cli.org/commands/plugin/activate/).

```sh
wp plugin activate wpg-config
```

### via WordPress Admin Panel

1. Download the [latest zip](https://github.com/wp-globalis-tools/wpg-config/archive/master.zip) of this repo.
2. In your WordPress admin panel, navigate to Plugins->Add New
3. Click Upload Plugin
4. Upload the zip file that you downloaded.

## Configuration

Edit the following files :

### wp-config.php :

Replace development by the environment name. For example, 'production' and 'wp-config-production.php' will be include.

```php
define( 'WP_ENV', 'development' );
```
### wp-config-common.php :

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

### wp-config-database.php

Add your database configuration here.

```php
/* DATABASE */
define( 'DB_NAME',     'foobar_myproject' );
define( 'DB_USER',     'username' );
define( 'DB_PASSWORD', 'password' );
define( 'DB_HOST',     'localhost' );
```

### wp-config-environment.php :

Files like wp-config-staging.php, wp-config-production.php, wp-config-development.php, wp-config-custom.php, etc... : Add your environment specific configuration in these files.