<?php 
$title = 'ข้อมูลผู้ใช้บริการ'; include("top.php"); require_once('cal.php')
?>

<style>
#all-panel{
    box-shadow: 5px 4px 8px 5px rgba(0, 0, 0, 0), 0 0 60px 0 rgba(0, 0, 0, 0.19);      
}
.col-centered{
    float: none;
    margin: 0 auto;
}

.col-left{
    float: right
}

.text{
    font-size: 20px;
}

</style>

<?php
$sql = "SELECT * FROM `employs` LEFT JOIN `customers` ON `customers`.customer_id = `employs`.customer_id WHERE user_id = ".$_SESSION['user_id']." ORDER BY customer_name ASC";

#excute statement
$stmt = $mysql_db->query($sql);
#get result
$cust = $stmt->fetchAll();

// var_dump($cust);
// exit(1);
?>

<div class="row" style="padding-top:20px" >
<div class="col-lg-6 col-centered " >



    <?php

    foreach($cust as $c){
        ?> 

    <div id="all-panel" class="panel panel-info">
        <div class="panel-heading">
            <span class="text">
                    <?= $c['customer_name']?>
                </span>
                <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="./edit.php?id=<?= $c['employ_id']?>&pay_act=2&pay_type=1">
                                            <i class="fa fa-money fa-fw"></i> ชำระด้วยเงินสด
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./edit.php?id=<?= $c['employ_id']?>&pay_act=2&pay_type=2">
                                            <i class="fa fa-refresh fa-fw"></i> ผ่อนชำระ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./edit.php?id=<?= $c['employ_id']?>&pay_act=1&pay_type=0">
                                            <i class="fa fa-times fa-fw"></i> ค้างชำระ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./edit.php?id=<?= $c['employ_id']?>&del=1">
                                            <i class="fa fa-trash-o fa-fw"></i> ลบ
                                        </a>
                                    </li>
                                </ul>
                            </div>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6">
                            เบอร์โทรศัพท์ &nbsp;  : &nbsp; &nbsp;<?= $c['customer_phone']?>
                        </div>
                        <div class="col-lg-6">
                            พื้นที่ &nbsp;  : &nbsp; &nbsp;<?= cal_area($c['area'])?>
                        </div>
                        <div class="col-lg-6">
                            ที่อยู่  &nbsp;  : &nbsp; &nbsp;<?= $c['customer_address']?>
                        </div>
                        <div class="col-lg-6">
                            ค่าบริการ &nbsp;  : &nbsp; &nbsp;<?= $c['price']?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    สถานะการชำระเงิน &nbsp;  : &nbsp; &nbsp;<?= get_payment($c['pay_type'],$c['pay_act'])?>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                        หมายเหตุ &nbsp;  : &nbsp; &nbsp;<?= $c['detail']?>
                    </div>
                </div>
        </div>
    
    </div>


    <?php
    }

    ?>
    
</div>
</div>

<?php include("bottom.php");?>