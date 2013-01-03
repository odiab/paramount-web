<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include($root . '/../AssetLoader.php');
  AssetLoader::load(TEMPLATE, 'head');
?>

<body>
  <div id="bodyContainer">
    <?php AssetLoader::load(TEMPLATE, 'header'); ?>

    <div id="bodybox">
      <div id="content">
        <h2> This website is still under construction.</h2>
        <h1>Credit</h1>
        <h2>Banner photos were taken by:</h2>
        <ul>
          <li>Joshua Rothhaas</li>
          <li>La Chiquita</li>
          <li>Erik Daniel Drost</li>
          <li>joiseyshowaa</li>
          <li>JSF306</li>
          <li>Eric Crawford</li>
        </ul>
        <p>All images were released under the Creative Commons license, and are free to use for commercial purposes with attribution.</p>

        <p>This website was made by Omar Diab. <a href="http://www.linkedin.com/in/osdiab">LinkedIn</a></p>
      </div>

      <?php AssetLoader::load(TEMPLATE, 'footer'); ?>
    </div>
  </div>
</body>
</html>
