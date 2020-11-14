<?php
$servername = 'localhost';
$username = 'allbjlsi_refferal';
$password = 'oladayo15';
$dbname = 'allbjlsi_refferaldb';

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(!$conn){
  echo "failed";
  exit();
}