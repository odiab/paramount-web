<?php
define('PAGE', 0);
define('TEMPLATE', 1);
define('HELPER', 2);
define('MODEL', 3);
define('NUM_ASSETS', 4);

class AssetLoader {

  private static $assets = null;

  private static function init()
  {
    $root = $_SERVER['DOCUMENT_ROOT'];
    self::$assets = array(
      $root . '/pages',
      $root . '/templates',
      $root . '/helpers',
      $root . '/models',
    );
  }

  public static function load($type, $path, $args=array())
  {
    if (!is_array(self::$assets)) {
      self::init();
    }

    if (!is_string($path)) {
      trigger_error("Invalid path '$path', must be a string", E_WARNING);
      return -1;
    }

    if (substr($path, -4) != '.php') {
      $path = $path . '.php';
    }

    $path = str_replace ('-', '/', $path);

    if (is_int($type) && $type >= 0 && $type < NUM_ASSETS) {
      $val = self::$assets[$type];
      if (!file_exists ("$val/$path")) {
        trigger_error("Asset at path of '$val/$path' does not exist", E_WARNING);
        return -1;
      } else {
        include ("$val/$path");
      }
    } else {
      trigger_error("Invalid asset type of '$type'", E_WARNING);
      return -1;
    }

    return 0;
  }
}
