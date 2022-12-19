<h1 align="center">Slim 4 Starter Template</h1>

<p align="center">An opinionated starter template for a simple PHP application built on <a href="https://www.slimframework.com" target="_blank">Slim Framework 4</a> (and <a href="https://getbootstrap.com" target="_blank">Bootstrap 5</a>).</p>

<p align="center">
  <a href="https://github.com/nbayramberdiyev/slim-4-starter/actions/workflows/continuous-integration.yml/badge.svg" target="_blank">
    <img src="https://github.com/nbayramberdiyev/slim-4-starter/actions/workflows/continuous-integration.yml/badge.svg" alt="CI" />
  </a>
</p>

<p align="center">
  <a href="#features">Features</a> •
  <a href="#requirements">Requirements</a> •
  <a href="#installation">Installation</a>
</p>

## Features

- :inbox_tray: Autoloader ([PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md))

- :incoming_envelope: HTTP message interfaces with [Slim-Psr7](https://github.com/slimphp/Slim-Psr7) ([PSR-7](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-7-http-message.md))

- :dart: HTTP server request handlers and HTTP server middleware ([PSR-15](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-15-request-handlers.md))

- :electric_plug: HTTP factories ([PSR-17](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-17-http-factory.md))

- :gear: Environment variables support with [phpdotenv](https://github.com/vlucas/phpdotenv)

- :ear_of_rice: Template engine with [Twig-View](https://github.com/slimphp/Twig-View)

- :earth_asia: i18n support with Symfony's [Translation Component](https://github.com/symfony/translation)

- :package: Dependency injection container with [PHP-DI](https://github.com/php-di/php-di) ([PSR-11](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-11-container.md))

- :test_tube: Unit testing with [PHPUnit](https://github.com/sebastianbergmann/phpunit)

- :mag: Static code analysis with [PHPStan](https://github.com/phpstan/phpstan) and [Psalm](https://github.com/vimeo/psalm)

- :telescope: Coding standards checking with [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) ([PSR-12](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-12-extended-coding-style-guide.md))

- :hammer_and_wrench: CI workflows with [GitHub Actions](https://docs.github.com/en/actions)

## Requirements

- [PHP](https://www.php.net) 8.1 or newer
- [Composer](https://getcomposer.org)

## Installation

**1. Clone this repository into your local machine:**

```shell
git clone git@github.com:nbayramberdiyev/slim-4-starter.git
```

**2. Go to the project folder:**

```shell
cd slim-4-starter
```

**3. Install the project dependencies:**

```shell
composer install
```

**4. Create a copy of `.env.example`:**

```shell
cp .env.example .env
```

**5. Start the PHP development server:**

```shell
php -S localhost:8888 -t public
```

That's it! Now go build something cool.
