<?php
require_once '../models/Post.php';
// Start PHP session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['auth'])) {
    header("Location: ../index.php");
    exit();
}
$posts = $GLOBALS['posts'];
$con=mysqli_connect('mysql.vichea.engineer', 'root','rootpassword','vicheadb');
if (!$con){
    echo "Connect successful";
    die('mysqli_errno($con)');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <style>
        img{
            width: 100px;
        }
    </style>
    <title>Clean Blog - Posts</title>
</head>

<body>
<main class="mb-4 mt-3">
    <div class="container px-4 px-lg-5 ">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center ">Post list</h2>
                <div class="my-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                            <th scope="col">
                                <a class="btn btn-primary" href="../admin/addpost.php">New Post</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql="SELECT * FROM `test`";
                        $result = mysqli_query($con,$sql);
                        while ($row = mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $title=$row['title'];
                            $content=$row['content'];
                            $image=$row['image'];
                            echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$title.'</td>
                                <td>'.$content.'</td>
                                <td><img src="'.$image.'" alt=""></td>
                                <td> 
                                <button type="button" class="btn btn-primary"><a href="../admin/updateposts.php?updateid='.$id.'" class="text-light">Edit</a></button>
                                <button type="button" class="btn btn-danger"><a href="../admin/deleteposts.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                                
                                </td>
                            </tr>';
                            
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <nav class="d-flex justify-content-center" >
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>