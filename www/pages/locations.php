<?php
AssetLoader::load(HELPER, 'contactHelpers');
AssetLoader::load(MODEL, 'Location');
?>

<h1>Site Locations</h1>

<?php
$locations = array();
$locations[] = array(
  'title' => "Cleveland's Westside",
  'name' => 'Dr. Isam A. Diab',
  'suffix' => 'M.D.',
  'description' => 'Conveniently located just minutes from Cleveland Hopkins International Airport.',
  'phone' => 4408260742,
  'fax' => 4408911576,
  'address' => "18660 Bagley Road\nPhase 11, Suite102B\nMiddleburg Heights, OH 44130",
);
$locations[] = array(
  'title' => "Cleveland's Eastside",
  'name' => 'Dr. Anne M. Carrol',
  'suffix' => 'M.D.',
  'description' => 'Located in beautiful Beachwood, Ohio with ample access to the best restaurants, hotels and shopping.',
  'phone' => 2165048888,
  'fax' => 2165048887,
  'address' => "23250 Chagrin Boulevard\nCommerce Park Five, Suite 201\nBeachwood, OH 44122",
);

foreach ($locations as $location) {
  $loc = new Location($location);
  $loc->draw();
}
?>
