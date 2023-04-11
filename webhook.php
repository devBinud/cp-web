<?php
$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

// Set this Verify Token Value on your Facebook App 
if ($verify_token === 'fncodetoken') {
  echo $challenge;
}
?>