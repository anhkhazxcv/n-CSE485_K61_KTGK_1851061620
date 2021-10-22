<?php
    $conn = mysqli_connect('localhost', 'root', '', 'ql_oto');
    if(!$conn){
        die("Kết nối thất bại" . mysqli_connect_error());
    } 
    mysqli_set_charset($conn, 'UTF8');
?>