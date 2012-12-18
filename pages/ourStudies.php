<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include($root . '/templates/head.php');
?>

<body>
  <div class="container">
  <?php include($root . '/templates/header.php'); ?>

  <div id="bodybox">
    <div id="content">
      <h1>What Trials Are Currently Available at Paramount?</h1>
      <hr align="left" noshade="noshade" size=1 />
      <ul>
        <li>Gout with Cardiovascular Disease</li>
        <li>Early onset of Rheumatoid Arthritis</li>
        <li>Rheumatoid Arthritis</li>
        <li>Diabetes Mellitus with Cardiovascular Disease</li>
        <li>Psoriatic Arthritis</li>
        <li>Ankylosing Spondylitis</li>
        <li>Lupus</li>
      </ul>
      <br />
    </div>
    <?php include($root . '/templates/footer.php'); ?>
  </div>
</body>
</html>
