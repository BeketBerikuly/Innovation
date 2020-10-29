<?php

$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_DATABASE = 'kogershin';

$conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

if ($conn -> connect_error) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

?>