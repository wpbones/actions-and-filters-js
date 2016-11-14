# WordPress actions and filters implementation for Javascript

A Javascript version of the actions and filters used in PHP in WordPress for WP Bones.

[![Latest Stable Version](https://poser.pugx.org/wpbones/actions-and-filters-js/v/stable)](https://packagist.org/packages/wpbones/actions-and-filters-js)
[![Total Downloads](https://poser.pugx.org/wpbones/actions-and-filters-js/downloads)](https://packagist.org/packages/wpbones/actions-and-filters-js)
[![License](https://poser.pugx.org/wpbones/actions-and-filters-js/license)](https://packagist.org/packages/wpbones/actions-and-filters-js)

## Installation

You can install third party packages by using:

    $ php bones require wpbones/actions-and-filters-js
   
I advise to use this command instead of `composer require` because doing this an automatic renaming will done.  

You can use composer to install this package:

    $ composer require wpbones/actions-and-filters-js

You may also to add `"wpbones/actions-and-filters-js": "^1.0"` in the `composer.json` file of your plugin:
 
```json
  "require": {
    "php": ">=5.5.9",
    "wpbones/wpbones": "~0.8",
    "wpbones/actions-and-filters-js": "~1.0"
  },
```

and run 

    $ composer install

Alternatively, you can get the single files `src/resources/assets/js/actions-and-filters.js` in your WP Bones plugin and compile it with `gulp`. 
Also, you can get pre-compiled minified version `src/public/js/actions-and-filters.min.js`.

## Enqueue for Controller

You can use the provider to enqueue the styles.

```php
public function index()
{
  // enqueue the minified version
  ActionsAndFiltersJSProvider::enqueueScripts();
  
  // ...
  
}
```

## ActionsAndFiltersJSProvider

This is a static class autoloaded by composer. You can use it to enqueue or get the styles path:

```php
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

```js

wpbones_add_action( 'my-action', function() { alert( "Hello" ) } );

...

wpbones_do_action( 'my-action' );

```

This Javascript version works in the same way than PHP version in WordPress.
