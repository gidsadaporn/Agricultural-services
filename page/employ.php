<?php 
$title = 'บันทึกข้อมูลผู้ใช้บริการ'; include("top.php"); require_once('cal.php')
?>

<style>
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

<div class="row" style="padding-top:20px" >
    <div class="col-lg-6 col-centered " >

        <div class="panel panel-info">
            <div class="panel-heading">
                เพิ่มการให้บริการ
            </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-lg-12">
                    <form role="form" action = "./new_employ.php" method="POST">
                        <div class="form-group ">
                            <label class="col-lg-2 ">ชื่อ</label>
                            <label class="col-lg-10">
                                <input class="form-control" name="name">
                            </label>
                            
                        </div>
                        <div class="form-group ">
                            <label class="col-lg-2 ">เบอร์โทรศัพท์</label>
                            <label class="col-lg-10">
                                <input class="form-control" name="phone">
                            </label>
                            
                        </div>
                        <div class="form-group ">
                            <label class="col-lg-2 ">ที่อยู่ </label>
                            <label class="col-lg-10">
                                <input class="form-control" name="address">
                            </label>
                            
                        </div>

                        <div class="form-group">
                            <label  class="col-lg-3" >สถานะการชำระ</label>
                            <label class="radio-inline">
                                <input type="radio" name="pay_act" value="2" checked>จ่ายแล้ว
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="pay_act"value="1">ค้างชำระ
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="pay_type"value="1" checked>จ่ายสด
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="pay_type"value="2">ผ่อนจ่าย
                            </label>
                        </div>


                        <div class="form-group ">
                            <label class="col-lg-3 ">ค่าบริการต่อไร่ </label>
                            <label class="col-lg-9">
                                <input class="form-control" id="pricex" type="number" min ="0" value = "0" onchange="change_price()">
                            </label>
                        </div>
                        <div class="form-group ">
                            <label class="col-lg-3 ">พื้นที่(ตารางวา) </label>
                            <label class="col-lg-9">
                                <input class="form-control" name="area"id="area" type="number" min ="0" value = "0" onchange="change_price()">
                            </label>
                        </div>
                        <div class="form-group ">
                            <label class="col-lg-3 ">ค่าบริการ </label>
                            <label class="col-lg-9">
                                <input class="form-control" name="price"id="price" type="number" min ="0" value = "0" step="0.01">
                            </label>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 ">รายละเอียด </label>
                                <label class="col-lg-9">
                                <textarea class="form-control" rows="3" name="detail"></textarea>
                                </label>
                         </div>

                         <div class="form-group">
                         <button type="submit" class="col-lg-12 btn btn-success">บันทึก</button>
                                
                         </div>

                    </form>
                </div>

            
            </div>
        
        </div>
            
        </div>

    </div>

    <div class="col-lg-6 col-centered " >


</div>


<script>

function change_price()
{
    document.getElementById('price').value = document.getElementById('pricex').value * document.getElementById('area').value / 400
}
    </script>

<?php include("bottom.php");?>