<?php

require('../connect.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_POST)){
    $name = $_POST['name'];
    $sql = "select * from customers where customer_name LIKE '$name'";
    $num = $mysql_db->query($sql);
    $data = $num->fetch();
    $num = $num->rowCount();
    $customer_id = null;


    if($num <=0) {
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $sql = "INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_phone`, `customer_address`) VALUES (NULL, '$name', '$phone', '$address');";
        $stmt = $mysql_db->query($sql);
        $customer_id = $mysql_db->lastInsertId();
    } else { 
        $customer_id = $data['customer_id'];
    }

    $user_id = $_SESSION['user_id'];
    $area = $_POST['area'];
    $pay_act = $_POST['pay_act'];
    $pay_type = $_POST['pay_type'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];



    $sql = "INSERT INTO `employs` (`employ_id`, `user_id`, `customer_id`, `area`, `price`, `pay_act`, `pay_type`, `detail`) VALUES (NULL, '$user_id', '$customer_id', '$area', '$price', '$pay_act', '$pay_type', '$detail');";

    $stmt = $mysql_db->query($sql);

    header('Location: employ.php');

}
?>