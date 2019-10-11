<?php
    $conn = mysqli_connect("localhost","root","","shop");
    if(mysqli_connect_errno()){
        echo "Error: " . mysqli_connect_error();
    }
?>