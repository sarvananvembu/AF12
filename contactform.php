<?php
if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];

  $mailTo = "subhamray80@gmail.com";

  mail();
}
?>
