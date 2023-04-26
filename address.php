<?php
    $server   = "localhost";
    $database = "OnStreaming";
    $username = "root";
    $password = ""; //password untuk akses server (karna user default jadi nga butuh password)

    $conn = mysqli_connect($server, $username, $password, $database);//alamat database untuk di import ke semua data yang terkait

    // remove comment to check database connection

    if(!$conn){
        die("<script>alert('DB Disconected')</script>");
    }else{
    die("<script>alert('DB Connected')</script>");
    }
?>