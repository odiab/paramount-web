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
      <h1>Potential Participants</h1>
      <h2>What Trials Are Currently Available at Paramount?</h2>
      <p>We are currently running trials for these conditions:</p> 
      <ul>
        <li>Gout with Cardiovascular Disease</li>
        <li>Early onset of Rheumatoid Arthritis</li>
        <li>Rheumatoid Arthritis</li>
        <li>Diabetes Mellitus with Cardiovascular Disease</li>
        <li>Psoriatic Arthritis</li>
        <li>Ankylosing Spondylitis</li>
        <li>Lupus</li>
      </ul>

      <h2>The Benefits of Participating in a Study</h2>
      <p>Study participants play a more active role in their own health care, gain access to new research treatments, receive expert medical attention and help others by contributing to clinical research. </p>
      <p>For more details, see the <a href="http://clinicaltrials.gov/ct2/info/understand">Frequently Asked Questions</a> from the NIH Clinical Trials website.</p>

      <h2>Information about Clinical Trials</h2>
      <ul>
        <li><a href="participants/clinicalTrials.php">What is a clinical trial?</a></li>
        <li><a href="participants/participate.php">Why participate in clinical trials?</a></li>
      </ul>
    </div>

    <?php AssetLoader::load(TEMPLATE, 'footer'); ?>
  </div>
</div>
</body>
</html>
