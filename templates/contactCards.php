<?php
function generateContactCard($employee) {
  $name = $employee['name'];
  $displayName = $name;
  if (isset($employee['suffix'])) {
    $displayName .= ', ' . $employee['suffix'];
    unset($suffix);
  }

  $title = $employee['title'];
  $phone = intToPhone($employee['phone']);
  $fax = intToPhone($employee['fax']);
  $email = $employee['email'] . '@paramountmedicalresearch.com';
  ?>

  <div class='contactCard'>
    <h2><?php echo $displayName; ?></h2>
    <h3><?php echo $title; ?></h3>

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
        <td>Email:</td>
        <td>
          <a href='mailto:<?php echo $email; ?>'><?php echo $email; ?></a>
        </td>
      </tr>
    </table>
  </div>

<?php }

foreach ($employees as $employee) {
  generateContactCard($employee);
}
