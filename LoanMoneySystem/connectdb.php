<?php
    //if can not connect db or die view show error
 $dbcon = mysqli_connect('localhost','ppn','1q1q','test') or die('ไม่สามารถติดต่อฐานข้อมูล MySQL ได้'.mysqli_connect_error());

    mysqli_set_charset($dbcon,'utf8');
?>