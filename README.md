# WordPress actions and filters implementation for Javascript

<p align="center">

  <a href="https://packagist.org/packages/wpbones/actions-and-filters-js">
  <img src="https://poser.pugx.org/wpbones/actions-and-filters-js/v/stable?style=for-the-badge" alt="Latest Stable Version" />
  </a>

  <a href="https://packagist.org/packages/wpbones/actions-and-filters-js">
   <img src="https://poser.pugx.org/wpbones/actions-and-filters-js/v/unstable?style=for-the-badge" alt="Latest Unstable Version" />
  </a>

  <a href="https://packagist.org/packages/wpbones/actions-and-filters-js">
   <img src="https://poser.pugx.org/wpbones/actions-and-filters-js/downloads?style=for-the-badge" alt="Total Downloads" />
  </a>

  <a href="https://packagist.org/packages/wpbones/actions-and-filters-js">
   <img src="https://poser.pugx.org/wpbones/actions-and-filters-js/license?style=for-the-badge" alt="License" />
  </a>

  <a href="https://packagist.org/packages/wpbones/actions-and-filters-js">
   <img src="https://poser.pugx.org/wpbones/actions-and-filters-js/d/monthly?style=for-the-badge" alt="Monthly Downloads" />
  </a>

</p>

A Javascript version of the actions and filters used in PHP in WordPress for WP Bones.

## Requirements

This package works with a WordPress plugin written with [WP Bones framework library](https://github.com/wpbones/WPBones).

## Installation

You can install third party packages by using:

```sh copy
php bones require wpbones/actions-and-filters-js
```

I advise to use this command instead of `composer require` because doing this an automatic renaming will done.

You can use composer to install this package:

```sh copy
composer require wpbones/actions-and-filters-js
```

You may also to add `"wpbones/actions-and-filters-js": "^1.0"` in the `composer.json` file of your plugin:

```json copy filename="composer.json" {4}
  "require": {
    "php": ">=7.4",
    "wpbones/wpbones": "~0.8",
    "wpbones/actions-and-filters-js": "~1.0"
  },
```

and run

```sh copy
composer install
```

Alternatively, you can get the single files `src/resources/assets/js/actions-and-filters.js` in your WP Bones plugin and compile it with `gulp`.
Also, you can get pre-compiled minified version `src/public/js/actions-and-filters.min.js`.

## Enqueue for Controller

You can use the provider to enqueue the styles.

```php copy
public function index()
{
  // enqueue the minified version
  ActionsAndFiltersJSProvider::enqueueScripts();

  // ...

}
```

## ActionsAndFiltersJSProvider

This is a static class autoloaded by composer. You can use it to enqueue or get the styles path:

```php copy
// enqueue the minified version
ActionsAndFiltersJSProvider::enqueueScripts();

// enqueue the flat version
ActionsAndFiltersJSProvider::enqueueScripts( false );

// return the absolute path of the minified css
ActionsAndFiltersJSProvider::js();

// return the absolute path of the flat css
ActionsAndFiltersJSProvider::js();
```

## Usage

Let's an example:

```js copy

wpbones_add_action( 'my-action', function() { alert( "Hello" ) } );

...

wpbones_do_action( 'my-action' );

```

This Javascript version works in the same way than PHP version in WordPress.