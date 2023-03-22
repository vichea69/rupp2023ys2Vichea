
<?php

$con=mysqli_connect('localhost', 'vicheasrin','290802','vicheadb');
if (!$con){
    echo "Connect successful";
    die('mysqli_errno($con)');
}

if(isset($_POST['submit']) && isset($_FILES['image'])) {
    $title=$_POST['title'];
    $content=$_POST['content'];


    $sql="INSERT INTO `test`( `title`, `content`) VALUES ('[$title]','[$content]')";
    $result = $con->query($sql);
    if ($result){
        echo "Data inserted successfully";
    }
    else{
        die(mysqli_errno($con));
    }

//    $img_name =$_FILES['image']['name'];
//    $img_size =$_FILES['image']['size'];
//    $img_temp_name = $_FILES['image']['tmp_name'];
//    $img_error= $_FILES['image']['error'];
//
//    if ($img_error===0){
//        if ($img_size>12500){
//            $em = "File to large";
//        }
//        else
//        {
//            $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
//            $img_ex_lo=strtolower($img_ex) ;
//            $allow_ex =array("png","jpeg","jpg");
//            if (in_array($img_ex_lo,$img_ex)){
//                $new_img=uniqid("IMG-",true). '.' .$img_ex_lo;
//                $img_upload_pat='images/'.$new_img;
//                move_uploaded_file($img_temp_name,$img_upload_pat);
//                echo "image uploaded";
//                $sql="INSERT INTO `pic`(`url_img`) VALUES ('$img_name')";
//                mysqli_query($con,$sql);
//            }
//            else
//            {
//                echo "cannot upload";
//            }
//        }
//    }


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
    <link href="css/styles.css" rel="stylesheet" />
    <title>Display data</title>
</head>

<body>





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