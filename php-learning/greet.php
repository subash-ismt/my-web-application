<?php


$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $msg = $_REQUEST['msg'];
  if (empty($msg)) {
    echo "Message is empty";
  } else {
    echo $msg;
  }
}

?>
