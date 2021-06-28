<?php 
    $conn=mysqli_connect("localhost","root","","mydatabase");
    if(!$conn){
        die("Connection failed" .mysqli_connect_error());
    }


?>