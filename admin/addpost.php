<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['auth'])) {
    header("Location: ../index.php");
    exit();
}
$con=mysqli_connect('mysql.vichea.engineer', 'root','rootpassword','vicheadb');
if (!$con){
    echo "Connect successful";
    die('mysqli_errno($con)');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image'];


    $imagefilename = $image['name'];
    $imagefileerror = $image['error'];
    $imagefiletemp = $image['tmp_name'];
    $filename_separate = explode('.', $imagefilename);
    $file_extension = strtolower(end($filename_separate));
    $extension = array('jpeg', 'jpg', 'png');
    if (in_array($file_extension, $extension)) {
        $upload_image = "../images/" . $imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);

        // Using prepared statement
        $stmt = $con->prepare("INSERT INTO `test`(`title`, `content`, `image`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $content, $upload_image);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Done";
        } else {
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
    <title>Clean Blog - Add Posts</title>
</head>
<body>
<h1 class="text-center pt-5">Add Posts </h1>
<div class="container d-flex justify-content-center ">
    <form action="" method="post"  class="w-25" enctype="multipart/form-data">
    <div class="form-group my-4 ">
    </div>
        <div class="form-group my-4">

            <label class="w-100">
                <input type="text" name="title" value="" placeholder="title" required class="form-control">
            </label>
        </div>
        <div class="form-group my-4">
            <label class="w-100">
                <input type="text" name="content" value="" placeholder="content" required class="form-control">
            </label>
        </div>
        <div class="form-group my-4">
            <label class="w-100">
                <input type="file" name="image" value="" placeholder="image" required class="form-control">
            </label>
        </div>
        
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Save</button>
        </div>

    </form>
</div>
</body>
</html>

