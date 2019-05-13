<?php
    $mysqli = new mysqli('localhost', 'nhaig', '390023', 'nhaig');
    
    if(mysqli_connect_errno())
    {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>