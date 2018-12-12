<?php

$host = "localhost";
$user = "root";
$pw = "";
$db_name = "ce"; #database name


# url สำหรับเข้าเว็บไซท์
# $base_url = "http://localhost/kool-store";
$base_url = "http://localhost/CE";

# Directory ที่จัดเก็บไฟล์เว็บ
# $base_dir = "C:\\xampp\\htdocs\\kool-store";
$base_dir = "C:/xampp/htdocs/CE";

try {
    $pdo_string = 'mysql:host='.$host.';dbname='.$db_name.';charset=utf8';
    $mysql_db = new PDO($pdo_string , $user,$pw); # $mysql_db ตัวแปรที่เราสร้างขึ้นเพื่อใช้ในการติดต่อฐานข้อมูล
    $mysql_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $mysql_db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
    echo "Failed to obtain database handle: " . $e->getMessage();
    exit;
}

# custom print array function
function p2($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

?>