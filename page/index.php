<?php 
$title = 'ข้อมูลผู้ประกอบการ'; include("top.php"); require_once('cal.php')
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
$sql = "SELECT user_id,pay_act,COUNT(price) AMOUNT,SUM(price) TOTAL FROM `employs` WHERE user_id = ".$_SESSION['user_id']." AND pay_act = 1 GROUP BY user_id,pay_act";

#excute statement
$stmt = $mysql_db->query($sql);
#get result
$data_1 = $stmt->fetchAll();
if($data_1 == null){
    $data_1['AMOUNT'] = 0;
    $data_1['TOTAL'] = 0;
}else{
    $data_1 = $data_1[0];
}

$sql = "SELECT user_id,pay_act,COUNT(price) AMOUNT,SUM(price) TOTAL FROM `employs` WHERE user_id = ".$_SESSION['user_id']." AND pay_act = 2 GROUP BY user_id,pay_act";

#excute statement
$stmt = $mysql_db->query($sql);
#get result
$data_2 = $stmt->fetchAll();
if($data_2 == null){
    $data_2['AMOUNT'] = 0;
    $data_2['TOTAL'] = 0;
}else{
    $data_2 = $data_2[0];
}
// var_dump($cust);
// exit(1);
?>

<div  class="row" style="padding-top:50px">
    <div  class="col-lg-6 col-centered " >

        <div id="all-panel" class="panel panel-info">
            <div  class="panel-heading">
                สรุปข้อมูลทั้งหมด
            </div>
            <div class="panel-body">
                <div class="col-lg-12">
                    ชื่อผู้ประกอบการ &nbsp; &nbsp; &nbsp; &nbsp;  : &nbsp; &nbsp; <?= $_SESSION['name']?>    
                </div>
                <div class="col-lg-12">
                    จำนวนการใช้บริการ &nbsp; &nbsp;  : &nbsp; &nbsp; <?= $data_1['AMOUNT']+$data_2['AMOUNT']?> รายการ   
                </div>
                <div class="col-lg-12">
                    รายได้จากค่าบริการ  &nbsp; &nbsp;  : &nbsp; &nbsp; <?= $data_1['TOTAL']+$data_2['TOTAL']?> บาท  
                </div>
            </div>
            
        </div>

    </div>

    <div class="col-lg-6 col-centered " >

<div id="all-panel" class="panel panel-info" >

    <div class="panel-body">
        
        <div class="col-lg-12">
            จำนวนบริการที่ชำระแล้ว &nbsp; &nbsp;  : &nbsp; &nbsp; <?= $data_2['AMOUNT']?> รายการ   
        </div>
        <div class="col-lg-12">
            รวมเป็นเงิน &nbsp; &nbsp;  : &nbsp; &nbsp; <?=$data_2['TOTAL']?> บาท  
        </div>
    </div>
    
</div>

<div id="all-panel" class="panel panel-info">

<div class="panel-body">
    
    <div class="col-lg-12">
        จำนวนบริการที่ค้างชำระ &nbsp; &nbsp;  : &nbsp; &nbsp; <?= $data_1['AMOUNT']?> รายการ   
    </div>
    <div class="col-lg-12">
        รวมเป็นเงิน &nbsp; &nbsp;  : &nbsp; &nbsp;<?=$data_1['TOTAL']?> บาท  
    </div>
</div>

</div>

</div>
</div>

<?php include("bottom.php");?>