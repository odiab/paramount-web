<?php
  include('AssetLoader.php');
  AssetLoader::load(TEMPLATE, 'head');
  $path = $_SERVER['REQUEST_URI'];
?>

<body>
  <div id="bodyContainer">
    <?php AssetLoader::load(TEMPLATE, 'header', array('path' => $path)); ?>
    <div id="bodybox">
      <div id="content">
        <?php
        if (AssetLoader::load(PAGE, $path) != 0) {
          AssetLoader::load(PAGE, '404');
        }
        ?>
      </div>
      <?php AssetLoader::load(TEMPLATE, 'footer'); ?>
    </div>
  </div>

</body>
</html>
