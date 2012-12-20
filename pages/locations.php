<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include($root . '/templates/head.php');
?>

<body>

<div id="bodyContainer">
  <?php include($root . '/templates/header.php'); ?>

  <div id="bodybox">
    <div id="content">
      <h1>Site Locations</h1>
      <hr align="left" noshade="noshade" size=1 />

      <h2>Cleveland’s  Westside:</h2>
      <h3>Dr.  Isam A. Diab</h3>
      <p>Conveniently  located just minutes from Cleveland Hopkins International Airport.</p>
      <p>&nbsp;</p>
      <p>18660  Bagley Road, Phase ll, Suite 102B</p>
      <p>Middleburg  Heights, Ohio 444130</p>
      <p>Phone: 440-826-0742</p>
      <p>Fax:  440-891-1576</p>
      <p>&nbsp;</p>

      <h2>Cleveland’s  Eastside:</h2>
      <h3>Dr.  Anne M. Carrol</h3>
      <p>Located  in beautiful Beachwood, Ohio with ample access to the best restaurants, hotels  and shopping.</p>
      <p>&nbsp;</p>
      <p>23250  Chagrin Boulevard, Commerce Park Five, Suite 201</p>
      <p>Beachwood,  Ohio 44122</p>
      <p>Phone:  216-504-8888</p>
      <p>Fax:  216-504-8887</p>
      <p>&nbsp;</p>
    </div>

    <?php include($root . '/templates/footer.php'); ?>
  </div>
</body>
</html>
