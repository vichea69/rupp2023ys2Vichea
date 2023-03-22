<?php
    $con=mysqli_connect('localhost', 'root','','vicheadb');
    if (!$con){
        echo "Connect successful";
        die('mysqli_errno($con)');
    }
    ?>
    
