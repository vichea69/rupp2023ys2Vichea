<?php
$con=mysqli_connect('localhost', 'vicheasrin','290802','vicheadb');
if (!$con){
    echo "Connect successful";
    die('mysqli_errno($con)');
}





if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title =$_POST['title'];
    $content=$_POST['content'];
    $image = $_FILES['image'];
    $imagefilename=$image['name'];
    $imagefileerror=$image['error'];
    $imagefiletemp=$image['tmp_name'];
    $filename_separate = explode('.', $imagefilename);
    $file_extension = strtolower(end($filename_separate));
    $extension = array('jpeg','jpg','png');
    if (in_array($file_extension, $extension)){
        $upload_image = "../images/".$imagefilename;
        move_uploaded_file($imagefiletemp,$upload_image);
        $sql ="INSERT INTO `test`(`title`, `content`, `image`) VALUES ('$title','$content','$upload_image')";
        $result = $con->query($sql);
        if ($result){
            echo '<div class="alert alert-success" role="alert">
                    <strong>success</strong> Data inserted successfully
                    </div>';
        }
        else{
            die(mysqli_errno($con));
        }
    }
    header('location: ./posts.php');
    exit();
}



















?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/styles.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
<h1 class="text-center pt-5">Add Posts </h1>
<div class="container d-flex justify-content-center ">
    <form action="" method="post"  class="w-25" enctype="multipart/form-data">
    <div class="form-group my-4 ">
    </div>
        <div class="form-group my-4">

            <label class="w-100">
                <input type="text" name="title" value="" placeholder="title" class="form-control">
            </label>
        </div>
        <div class="form-group my-4">
            <label class="w-100">
                <input type="text" name="content" value="" placeholder="content" class="form-control">
            </label>
        </div>
        <div class="form-group my-4">
            <label class="w-100">
                <input type="file" name="image" value="" placeholder="image" class="form-control">
            </label>
        </div>
        
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Save</button>
        </div>

    </form>
</div>
</body>
</html>
