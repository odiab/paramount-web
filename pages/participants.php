<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include($root . '/templates/head.php');
?>

<body>
  <div class="container">
    <?php include($root . '/templates/header.php'); ?>
    <div id="bodybox">
    <div id="content">
      <h1>The Benefits of Participating in a Study</h1>
      <hr align="left" noshade="noshade" size=1 />

      <p>Study participants play a more active role in their own health care, gain access to new research treatments, receive expert medical attention and help others by contributing to clinical research. </p>
      <br />
      <p>For more details, see the <a href="http://clinicaltrials.gov/ct2/info/understand">Frequently Asked Questions</a> from the NIH Clinical Trials website.</p>
      <br />

      <hr align="center" noshade="noshade" size=1 width="40%" />
      <h2>Information about Clinical Trials</h2>
      <ul>
        <li><a href="participants/clinicalTrials.php">What is a clinical trial?</a></li>
        <li><a href="participants/participate.php">Why participate in clinical trials?</a></li>
        <li><a href="ourStudies.php">What trials are available for me to be a part of?</a></li>
      </ul>
      <br />
    </div>

    <?php include($root . '/templates/footer.php'); ?>
  </div>
</body>
</html>
