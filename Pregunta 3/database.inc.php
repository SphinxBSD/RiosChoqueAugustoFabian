<?php
    $server = 'localhost';
    $username = 'augustorios';
    $password = '123456';
    $database = 'rioschoqueaugustofabian';

    try {
        $con = mysqli_connect($server,$username,$password);
        mysqli_select_db($con, $database);
        
    } catch (PDOException $e) {
        die('Connected failed'.$e->getMessage());
    }
?>