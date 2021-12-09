<?php
  
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="applephp";
    $conn= new mysqli($servername,$username,$password,$dbname);
    if(!$conn)
        echo 'Kết nối thất bại';
?>