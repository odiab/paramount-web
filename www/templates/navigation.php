<?php
  $links = array(
    'home' => 'Home',
    'staff' => 'Meet Our Staff',
    'participants' => 'For Participants',
    'sponsors' => 'For Sponsors',
    'locations' => 'Locations',
    'contact' => 'Contact Us',
  );

  // get current page, root dir
  $current = $_GET['page'];
  $dash = strpos($current, '-');
  if ($dash != FALSE) {
    $current = substr($current, 0, $dash);
  }
?>

<ul id="nav">
  <?php
  // generate links to pages
  foreach ($links as $key => $value) {
    $class = '';
    if ($current == $key) {
      $class .= 'current';
    }
    echo "<li><a class='$class' href='/?page=$key'>$value</a></li>";
  }
  ?>
</ul>
