<?php
    session_start();
    include_once('dbh.php');
    $msg=$_POST['msg'];
    $name=$_SESSION['name'];

    $sql= "insert into posts(msg,name) values('$msg' , '$name')";
    $result= $conn->query($sql);

    header("Location:home.php");

?>