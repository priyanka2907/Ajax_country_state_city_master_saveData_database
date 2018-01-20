<?php
//Page from where the database is connected using the config page.
include_once "db_config.php";
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>