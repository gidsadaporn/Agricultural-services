<?php
require('../connect.php');


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}




if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(isset($_GET['del'])){
        $sql = "DELETE FROM `employs` WHERE `employs`.`employ_id` = $id";
        $num = $mysql_db->query($sql);
    }
    else{
        $pay_act = $_GET['pay_act'];
        $pay_type = $_GET['pay_type'];
        $sql = "UPDATE `employs` SET `pay_act` = '$pay_act', `pay_type` = '$pay_type' WHERE `employs`.`employ_id` = $id;";
        $num = $mysql_db->query($sql);
    }


    header('Location: customers.php');
    

}

?>
