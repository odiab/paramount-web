<?php
  $root = $_SERVER['DOCUMENT_ROOT'] . '/..';
  include($root . '/AssetLoader.php');
  AssetLoader::load(TEMPLATE, 'head');
?>

<body>
 <div id="bodyContainer">
    <?php AssetLoader::load(TEMPLATE, 'header'); ?>

    <div id="bodybox">
      <div id="content">
        <?php
        if (isset($_GET["page"])) {
          $index = $_GET["page"];
        } else {
          $index = 'home';
        }

        if (AssetLoader::load(PAGE, $index) != 0) {
          AssetLoader::load(PAGE, '404');
        }
        ?>
    </div>

    <?php AssetLoader::load(TEMPLATE, 'footer'); ?>
  </div>

</body>
</html>
