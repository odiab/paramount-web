<?php
define('PAGE', 0);
define('TEMPLATE', 1);
define('HELPER', 2);
define('MODEL', 3);
define('NUM_ASSETS', 4);

class AssetLoader {

  private static $assets = null;

  /***********
   * HELPERS *
   ***********/
  private static function validatePagePath($path)
  {
    // prepare string
    if (strlen($path) >= 4 && substr($path, -4) == '.php') {
      $path = substr($path, 0, strlen($path) - 4);
    }

    // check validity
    $valid = true;
    if ($path[0] == '-') {
      $valid = false;
    } else {
      $tmp = str_replace ('-', '', $path);
      if (!ctype_alnum ($tmp)) {
        $valid = false;
      }
    }

    return $valid;
  }

  /********
   * INIT *
   ********/
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

  /***********
   * METHODS *
   ***********/
  public static function load($type, $path, $args=array())
  {
    if (!is_array(self::$assets)) {
      self::init();
    }

    if (!is_string($path)) {
      trigger_error("Invalid path '$path', must be a string", E_WARNING);
      return -1;
    }

    if (strlen($path) < 4 || substr($path, -4) != '.php') {
      $path .= '.php';
    }

    if (is_int($type) && $type >= 0 && $type < NUM_ASSETS) {
      if ($type == PAGE) {
        $valid = self::validatePagePath($path);

        if (!$valid) {
          trigger_error("Path '$path' must consist of alphanumeric character
            s and dashes, and the first character must not be a dash",
            E_WARNING);
          return -1;
        }

        $path = str_replace ('-', '/', $path);
      }

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
