<?php

namespace WPKirk\ActionsAndFiltersJS;

class ActionsAndFiltersJSProvider
{

  public static function js( $minified = true )
  {
    $file = __FILE__;

    $path = rtrim( plugin_dir_url( $file ), '\/' );

    $minified = $minified ? ".min" : "";

    $css = "{$path}/public/js/actions-and-filters{$minified}.js";

    return $css;
  }

  public static function enqueueScripts( $minified = true )
  {
    $key = 'actions-and-filters';
    wp_enqueue_script( $key,
                       self::js( $minified ),
                       [],
                       WPCleanFix()->Version,
                       true );

    return $key;

  }
}