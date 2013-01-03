<?php
header("Content-type: text/css; charset: UTF-8");
$dir = "$_SERVER[DOCUMENT_ROOT]/style";
$styles = glob("$dir/*.css");
 
$compiled = '';
foreach($styles as $style)
{
  echo file_get_contents($style) . "\n"; 
}
