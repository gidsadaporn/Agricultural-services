<?php
require('check_user.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        body {
            
            font-family: 'K2D', sans-serif;
        }
        .bg {
  
            background-image: url("BG13.jpg");
            height: 100%; 
            width:100%;
            background-size: cover;
}
    </style>


</head>


<body class="bg">

    <div  id="wrapper">

        <div class="row" style="padding:10px"> 
            <div class="col-lg-12" align="right">
                <?php
                    if(isset($_SESSION['name']))
                    {
                        echo "WELCOME &nbsp; : &nbsp; &nbsp;".$_SESSION['name'];
                    }
                     
                ?>
                <a class="btn btn-info" href="./index.php">หน้าหลัก</a>
                <!-- <a class="btn btn-info" href="./index.php">ข้อมูลผู้ประกอบการ</a> -->
                <a class="btn btn-info" href="./customers.php">ข้อมูลผู้ใช้บริการ</a>
                <a class="btn btn-info" href="./tools.php">เครื่องมือ</a>
                <a class="btn btn-info" href="./employ.php">บันทึกข้อมูลผู้ใช้บริการ</a>
                <?php
                    if($title == 'login'){
                        echo '<a class="btn btn-default" href="./register.php">Register | สมัครสมาชิก</a>';
                    }
                    else{
                        echo '<a class="btn btn-default" href="./logout.php">Logout | ออกจากระบบ</a>';
                    }
                ?>
                
            </div>
        </div>




    