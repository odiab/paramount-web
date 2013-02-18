<?php
  include('AssetLoader.php');
  AssetLoader::load(TEMPLATE, 'head');
  if (isset($_GET["page"])) {
    $index = $_GET["page"];
  } else {
    $index = 'home';
  }

?>

<body>
 <div id="bodyContainer">
    <?php AssetLoader::load(TEMPLATE, 'header', array('page' => $index)); ?>
    <div id="bodybox">
      <div id="content">
        <?php
        if (AssetLoader::load(PAGE, $index) != 0) {
          AssetLoader::load(PAGE, '404');
        }
        ?>
      </div>
      <?php AssetLoader::load(TEMPLATE, 'footer'); ?>
    </div>
  </div>

</body>
</html>
