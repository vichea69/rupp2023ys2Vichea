<?php
$con=mysqli_connect('localhost', 'vicheasrin','290802','vicheadb');
if (!$con){
    echo "Connect successful";
    die('mysqli_errno($con)');
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
    <form action="../displaydata.php" method="post"  class="w-25" enctype="multipart/form-data">
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
