<?php

namespace WPKirk\ActionsAndFiltersJS;

class ActionsAndFiltersJSProvider
{

  /**
   * Get the URL of the JS file
   *
   * @param boolean $minified
   * @return string
   */
  public static function js($minified = true)
  {
    $file = __FILE__;

    $path = rtrim(plugin_dir_url($file), '\/');

    $minified = $minified ? ".min" : "";

    $js = "{$path}/public/js/actions-and-filters{$minified}.js";

    return $js;
  }

  /**
   * Enqueue the JS file
   *
   * @param boolean $minified
   * @return string
   */
  public static function enqueueScripts($minified = true)
  {
    $key = 'actions-and-filters';
    wp_enqueue_script(
      $key,
      self::js($minified),
      [],
      WPCleanFix()->Version,
      true
    );

    return $key;
  }
}
