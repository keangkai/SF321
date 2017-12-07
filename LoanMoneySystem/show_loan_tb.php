<?php
    require 'connectdb.php';

    $q = "SELECT * FROM payment_and_interest";
    $result = mysqli_query($dbcon,$q);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" >
        <title>แสดงตาราง</title>
        <style>
            table,th,td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
    <div class="flex-container">
    <header>
        <section>
            <div><img src="image/apple-touch-icon.png" width="150px" height="150px"></div>
            <h2>ระบบสารสนเทศและฐานข้อมูล</h2>
        </section>
    </header>
    <!-- end headeer -->
    <nav class="nav">
    <ul>
    <li><a href="#home">เมนูหลัก</a></li>
    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">บริหาร</a>
        <div class="dropdown-content">
            <a href="#">ทะเบียนหนังสือรับ</a>
            <a href="#">ทะเบียนหนังสือส่ง</a>
            <a href="#">เลขคุรุภัณฑ์</a>
        </div>
    </li>
    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">รายได้</a>
        <div class="dropdown-content">
            <a href="#">รายการส่งเงินสมทบปกติ</a>
            <a href="#">รายการส่งเงินสมทบส่วนทบขาด</a>
            <a href="#">รายได้-เงินโอน</a>
            <a href="#">รายงานส่งเงินสมทบส่วนที่ขาด</a>
            <a href="#">รายงานส่งเงินสมทบ ก.บ.ท.</a>
            <a href="#">รายงานโอนเงินสมทบ</a>
            <a href="#">รายงานทะเบียนคุมการขอโอนเงิน</a>
            <a href="#">รายงานภาพรวมโอนเงิน</a>
            <a href="#">รายงานจ่ายเงินกู้</a>
            <a href="#">รายการรับชำระเงินกู้และดอกเบี้ย</a>
        </div>
    </li>
    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">การเงิน</a>
        <div class="dropdown-content">
            <a href="#">ใบฎีกาเบิกค่าใช้จ่าย</a>
            <a href="#">รายการรับเงินสมทบ</a>
            <a href="#">รายการเงินโอน</a>
            <a href="#">รายการคืนเงินเกิน</a>
        </div>
    </li>
    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">ตรวจสอบ</a>
        <div class="dropdown-content">
            <a href="#">---</a>
        </div>
    </li>
    <li class="dropdown"><a href="javascript:void(0)" class="dropbtn">บัญชี</a>
        <div class="dropdown-content">
            <a href="#">รายการปรับปรุงบัญชี</a>
            <a href="#">รายการรอบันทึกประจำวัน</a>
            <a href="#">รายการปรับปรุงสินทรัพย์</a>
            <a href="#">รายการรับชำระเงิน</a>
            <a href="#">เพิ่มบัญชีธนาคาร</a>
            <a href="#">ปิดบัญชีธนาคาร</a>
            <a href="#">รายงานประจำวัน</a>
            <a href="#">รายงานประจำเดือน</a>
        </div>
    </li>
</ul>
<!-- end navigation bar -->
        <h2>ตาราง</h2>
        <table style="width=900px">
            <tr>
                <th>เลขที่สัญญา</th>
                <th>หน่วยงาน</th>
                <th>วันที่ชำระ</th>
                <th>ธนาคารที่ฝากเงิน</th> 
                <th>จำนวนเงิน</th> 
            </tr>
            <?php
                while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                
            ?>
            <tr>
                <td> <?php echo $row['loan_id_compact'] ?></td>
                <td> <?php echo $row['loan_department'] ?></td>
                <td> <?php echo $row['loan_dateadd'] ?></td>
                <td> <?php echo $row['loan_bank'] ?></td>
                <td> <?php echo number_format($row['loan_money'],2) ?></td>
            </tr>
            <?php 
                } 
                mysqli_free_result($result);
                mysqli_close($dbcon);
            ?>
        </table>
    </body>
</html>