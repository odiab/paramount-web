<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php
    include('Assets.php');
    Assets::load(TEMPLATE, 'head');
    $path = $_SERVER['REQUEST_URI'];
  ?>

  <body>
    <div id="bodyContainer">
      <?php Assets::load(TEMPLATE, 'header', array('path' => $path)); ?>
      <div id="bodybox">
        <div id="contentContainer">
          <div id="content">
            <?php
            if (Assets::load(PAGE, $path) != 0) {
              Assets::load(PAGE, '404');
            }
            ?>
          </div>
        </div>
        <?php Assets::load(TEMPLATE, 'footer'); ?>
      </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type='text/javascript'>
      function randomInt(min, max) {
        return min + Math.floor(Math.random() * (max - min + 1))
      }
      var imgPath = '/assets/images/headers/' + randomInt(0, 6) + '.jpg'
      $('#header').css('background-image', 'url(' + imgPath + ')');
    </script>
  </body>
</html>
