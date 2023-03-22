<?php
$con=mysqli_connect('localhost', 'vicheasrin','290802','vicheadb');
if (!$con){
    echo "Connect successful";
    die('mysqli_errno($con)');
}

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `test` WHERE id=$id";
    $result = mysqli_query($con,$sql);

    
}
header('location: ./posts.php');
exit();
?>