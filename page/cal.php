<?php

function cal_area($area){
    return floor($area/400)." ไร่ ".($area%400)." ตารางวา";

}

function get_payment($type,$act){
    $return = "";
    switch($act){
        case "1" : $return.="ค้างชำระ ";return $return;
        case "2" : $return.="ชำระแล้ว ";break;
        default : $return.="อื่นๆ ";
    }

    $return.="ด้วย";
    switch($type){
        case "1" : $return.="เงินสด ";break;
        case "2" : $return.="ผ่อนชำระ ";break;
        default : $return.="อื่นๆ ";
    }

    return $return;
        


}


?>