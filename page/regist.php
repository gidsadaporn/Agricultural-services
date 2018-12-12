<?php

require('../connect.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_POST)){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $pass_1 = $_POST['password'];
    $pass_2 = $_POST['password_2'];

    if($pass_1 != $pass_2){
        $_SESSION['regist_msg'] = "รหัสผ่านไม่ตรงกัน";
        var_dump($_SESSION);
        
        header('Location: register.php');
    }

    $sql = "SELECT username FROM `users` WHERE username LIKE '$username'";
    $num = $mysql_db->query($sql);
    $data = $num->fetch();
    $num = $num->rowCount();

    if($num <=0) {
        $password = hash('sha256',$pass_1);
        $sql = "INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES (NULL, '$username', '$password', '$name');";
        $stmt = $mysql_db->query($sql);
        $_SESSION['regist_msg'] = "สมัครสมาชิกสำเร็จ";
        // var_dump($_SESSION);
        
        header('Location: register.php');
    } else { 
        $_SESSION['regist_msg'] = "มีผู้ใช้ username นี้แล้ว";
        // var_dump($_SESSION);
        
        header('Location: register.php');
    }
    
}
?>