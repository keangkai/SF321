<?php
    
    $loanIDCompact = $_POST['loan_id_compact'];
    $loanDateadd = $_POST['loan_dateadd'];
    $provinceID = $_POST['province_id'];
    $disID = $_POST['dis_id'];
    $munID = $_POST['mun_id'];
    $loanStatus = $_POST['loan_status0'];
    $loanMoney = $_POST['loan_money'];
    $loanBank = $_POST['loan_bank'];


    $q = "INSERT INTO Payment (loan_id_compact,loan_dateadd,province_id,dis_id,mun_id,loan_status0,loan_money,loan_bank) VALUES 
    ('$loanIDCompact','$loanDateadd','$provinceID',' $disID','$munID','$loanStatus','$loanMoney','$loanBank')";

    $result = mysqli_query($dbcon, $q);
    if ($result){
        echo "เพิ่มข้อมูลเรียบร้อยแล้ว";
    }else {
        echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($dbcon);
    }
    mysqli_close($dbcon);
    
?>