<?php
    require 'connectdb.php';
    
    $bank_name = 'ธนาคารกรุงศรีอยุธยา';

    //add data
    $query = "INSERT INTO bank (bank_id,bank_name) VALUES ('','$bank_name')";

    $result = mysqli_query($dbcon,$query);
    
    if ($result){
        echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
    }else {
        echo "เกิดข้อผิดพลาด".mysqli_error($dbcon);
    }
?>