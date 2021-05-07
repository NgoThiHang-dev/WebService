<?php
    $con=mysqli_connect("localhost", "root", "")
        or die("Ket noi that bai");
        $db=mysqli_select_db($con, "testdb_test"); 
?>