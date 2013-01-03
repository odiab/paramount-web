<?php
function generateContactPane($site) {
  $title = $site['title'];
  $name = $site['name'];
  $displayName = $name;
  if (isset($site['suffix'])) {
    $displayName .= ', ' . $site['suffix'];
    unset($suffix);
  }

  $description = $site['description'];
  $phone = intToPhone($site['phone']);
  $fax = intToPhone($site['fax']);
  $address = $site['address'];

  ?>
  <div class='contactPaneContainer'>
    <div class='contactPane'>
      <h2><?php echo $title; ?></h2>
      <h3><?php echo $displayName; ?></h3>

      <table>
        <tr>
          <td>Phone:</td>
          <td><?php echo $phone; ?></td>
        </tr>
        <tr>
          <td>Fax:</td>
          <td><?php echo $fax; ?></td>
        </tr>
        <tr>
          <td>Location:</td>
          <td><?php echo $address; ?></td>
        </tr>
      </table>
    </div>
    <p><?php echo $description; ?></p>
  </div>
<?php }

foreach ($sites as $site) {
  generateContactPane($site);
}
