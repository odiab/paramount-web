<?php
  $root = $_SERVER['DOCUMENT_ROOT'];
  include($root . '/templates/head.php');
?>

<body>
  <div class="container">
    <?php include($root . '/templates/header.php'); ?>
    <div id="bodybox">
      <div id="content">
        <h1>Potential Participants</h1>
        <h2>What are Clinical Trials?</h2>
        <p>Although there are many definitions, clinical trials are generally considered to be biomedical or health-related research studies in human beings that follow a pre-defined protocol. Interventional studies are those in which the research subjects are assigned by the investigator to a treatment or other intervention, and their outcomes are measured. Observational studies are those in which individuals are observed and their outcomes are measured by the investigators.</p>
        <h2>The Phases of Studies</h2>
        <p>Before a new medication or therapy is approved by the U.S. FDA, it must pass through several phases of study. The very early phases of a study will aim to evaluate the effects of the drug on animals, usually in much higher doses than what would be given to a human. Phase 1 studies determine how a drug metabolizes through a healthy human under a very controlled environment. Phase 2-4 studies help provide additional information on the drug's safety and efficacy in a certain population of subjects. Usually this is when the best dose is determined. Phase 4 generally refers to drugs/medicines/therapies that have already been approved by the FDA but more information is being collected for marketing and sometimes safety purposes.</p>
      </div>
      <?php include($root . '/templates/footer.php'); ?>
    </div>
  </div>
</body>
</html>
