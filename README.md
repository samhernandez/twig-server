# Twig Development Server

A simple Twig server for quick prototyping.

## Dependencies

```bash
composer install
```

## Start the server

PHP CLI is required.

Run:

```bash
php -S localhost:8888 router.php
```

For convenience, a start script is included to serve on port `8888`.

```bash
./start
```

(The `/start` file should be executable. If not run `chmod +x start`.)

## Tailwind

The [Tailwind CDN script](https://tailwindcss.com/docs/installation/play-cdn) is loaded in
the `templates/index.twig` file.

## PHP

PSR-4 autoload points to the `/lib` directory. Add PHP classes there under the namespace `TwigServer`.

