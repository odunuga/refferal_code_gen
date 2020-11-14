<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'refferal_codes';

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn){
  echo "failed";
  exit();
}