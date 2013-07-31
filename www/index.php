<?php
  include('Assets.php');
  Assets::load(TEMPLATE, 'head');
  $path = $_SERVER['REQUEST_URI'];
?>

<body>
  <div id="bodyContainer">
    <?php Assets::load(TEMPLATE, 'header', array('path' => $path)); ?>
    <div id="bodybox">
      <div id="content">
        <?php
        if (Assets::load(PAGE, $path) != 0) {
          Assets::load(PAGE, '404');
        }
        ?>
      </div>
      <?php Assets::load(TEMPLATE, 'footer'); ?>
    </div>
  </div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</body>
</html>
