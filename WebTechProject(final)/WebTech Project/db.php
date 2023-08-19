<?php
    $server='localhost';
    $user='rahul';
    $password='1234';
    $db='student-management';
    $conn=mysqli_connect($server,$user,$password,$db);
    if(!$conn)
    {
        die("CONNECTION FAILED ! : ".mysqli_connect_error());
    }