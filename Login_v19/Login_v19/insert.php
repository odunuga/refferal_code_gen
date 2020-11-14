<?php
require 'connection.php';
require 'generator.php';

if (isset($_POST['submit'])){

    $username = $_POST['name'];
    $refcode = $_POST['code'];

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO refferal(name, refcode) VALUES('$username', '$refcode')";

    if(mysqli_query($conn, $sql)){
        $result = header('location:index.php');
    }else{
        echo 'oops';
    }
    mysqli_close($conn);
}