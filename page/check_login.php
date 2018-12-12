<?php
require('../connect.php');

var_dump($_POST['username']);
var_dump($_POST['password']);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = hash('sha256',$_POST['password']);
    $sql = "select * from users where username ='$username' and password ='$password' ";
    $num = $mysql_db->query($sql);
    $data = $num->fetch();
    $num = $num->rowCount();
    
    if($num <=0) {
        header('Location: login.php');
    } else { 
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['name'] = $data['name'];
        header('Location: index.php');
    }

}

?>
