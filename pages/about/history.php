<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include($root . '/templates/head.php');
?>

<body>
  <div id="bodyContainer">
    <?php include($root . '/templates/header.php'); ?>

    <div id="bodybox">
      <div id="content">
        <h1>About Us</h1>
        <hr align="left" noshade="noshade" size=1 />
        <h2>Our History</h2>
        <p>Paramount Medical Research &amp; Consulting, LLC  is positioned in collaboration with Premier Physicians Group, LLC, a  multispecialty network of over 75 physicians and nurse practitioners. Our partner  specialties include: cardiology, endocrinology, family practice, internal  medicine, rheumatology, oncology, orthopedics and physical medicine. </p>
        <p>&nbsp;</p>
      </div>
      <?php include($root . '/templates/footer.php'); ?>      
    </div>
  </div>

</body>
</html>
