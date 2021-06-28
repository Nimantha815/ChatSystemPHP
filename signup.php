<?php 
    include_once('dbh.php');
    $uname=$_POST['uname'];
    $email=$_POST['Email'];
    $pass=$_POST['Passsword'];


    $sql="insert into signup(username,email,password)
    values ('$uname','$email','$pass')";
    $result=$conn->query($sql);

    header("Location:index.php");
    
?>