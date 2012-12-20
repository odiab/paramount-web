<?php
function intToPhone($phone) {
  $phone = (string)$phone;
  return '(' . substr($phone, 0, 3) . ') ' . substr($phone, 3, 3) . '-' . substr($phone, 6);
}
