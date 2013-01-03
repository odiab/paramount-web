<?php
const PAGE = 0;
const TEMPLATE = 1;
const HELPER = 2;
const NUM_ASSETS = 3;

class AssetLoader {

  private static $assets = null;

  private static function init()
  {
    $docroot = $_SERVER['DOCUMENT_ROOT'];
    $root = $docroot . '/..';
    self::$assets = array(
      $docroot,
      $root . '/templates',
      $root . '/helpers',
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

    if (is_int($type) && $type >= 0 && $type < NUM_ASSETS) { 
      $val = self::$assets[$type];
      include ("$val/$path");
    } else {
      trigger_error("Invalid asset type of '$type'", E_WARNING);
      return -1;
    }

    return 0;
  }
}
