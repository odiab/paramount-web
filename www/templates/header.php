<div id="header">
  <div id="headerlogo">
    <div id="headertext" onclick="window.location = '/'">
      <h1>Paramount</h1>
      <h2>Medical Research and Consulting</h2>
    </div>
  </div>
  <?php AssetLoader::load(TEMPLATE, 'navigation',
        array('page' => $_GET['page'])); ?>
</div>
