<?php
session_start();
require_once("smtp.php");


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
  $action = filter_input(INPUT_GET, 'action');
  if ($action == NULL) {
    header("location:index.php");
  }
}
if ($action == "send") {
  $name = filter_input(INPUT_POST, "name");
  $email = filter_input(INPUT_POST, "email");
  $subject = filter_input(INPUT_POST, "subject");
  $content = filter_input(INPUT_POST, "message");

  $_SESSION['errors'] =  send($name, $subject, $email, $content);
  header("location:index.php");

} else {
  header("location:index.php");
}
?>

