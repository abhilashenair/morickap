# Morickap WordPress customizations

This repository contains custom code, not a complete WordPress installation or database backup.

## Performance plugin

`wp-content/mu-plugins/morickap-performance.php` skips Swing countdown assets when countdown mode is disabled. It preserves the assets when countdown mode is enabled and does nothing for other themes. WordPress loads this plugin automatically from `mu-plugins`.

## Local server deployment

From the repository checkout:

```bash
git pull --ff-only origin main
sudo mkdir -p /var/www/wordpress/wp-content/mu-plugins
sudo install -m 644 wp-content/mu-plugins/morickap-performance.php /var/www/wordpress/wp-content/mu-plugins/morickap-performance.php
```

Clear WP Rocket's cache, then check the homepage, mobile menu, room pages, and booking flow. PHP syntax has been checked; browser verification and performance measurement remain necessary.

## Rollback

```bash
sudo rm /var/www/wordpress/wp-content/mu-plugins/morickap-performance.php
```

Clear WP Rocket's cache again.
