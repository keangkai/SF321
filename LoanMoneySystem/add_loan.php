<?php
    require 'connectdb.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" >
        <title>ระบบสารสนเทศและฐานข้อมูล</title>
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
    
    <article class="article">
        <h1>รับชำระเงินกู้และดอกเบี้ย </h1>
        <form action="loan_insert.php" method="post" enctype="multipart/form-data" id="form1">
        <fieldset>
        <legend>เพิ่มรายการเงินกู้</legend>
            <label>เลขที่สัญญา: </label><input name="loan_id_compact" type="text" id="loan_id_compact" size="40"><br>
            <label>อปท: </label>
                <select name="province_id" id="province_id">
                    <option value="">--เลือกจังหวัด--</option>
                    <option value="กทม.">กทม.</option>
                    <option value="ชลบุรี">ชลบุรี</option>
                </select>
                <select>
                    <option value="">--เลือกอำเภอ--</option>
                    <option value="เมือง">เมือง</option>
                </select>
                <select>
                    <option value="เทศบาล">เทศบาล</option>
                </select>
                <label>วันที่จ่ายเงิน: </label><input name="loan_dateadd" type="date" id="loan_dateadd" size="40"><br>
                <label>จำนวนเงิน: </label><input name="loan_money" type="text" id="loan_money" size="40"><br>
            <label>ธนาคารต้นทาง: </label>
                <select>
                    <option value="">เลือกธนาคาร</option>
                    <option value="กรุงไทย">กรุงไทย</option>
                    <option value="กรุงเทพ">กรุงเทพ</option>
                    <option value="กสิกร">กสิกร</option>
                    <option value="ไทยพาณิช">ไทยพาณิช</option>
                </select>
                <label>ธนาคารปลายทาง: </label>
                <select>
                    <option value="">เลือกธนาคาร</option>
                    <option value="กรุงไทย">กรุงไทย</option>
                    <option value="กรุงเทพ">กรุงเทพ</option>
                    <option value="กสิกร">กสิกร</option>
                    <option value="ไทยพาณิช">ไทยพาณิช</option>
                </select>
            <table style="width=900px">
                <br><br>
                <input type="submit" type="submit" id="submit" value="บันทึกข้อมูล">
                <input type="submit" type="submit" id="submit" value="ย้อนกลับ" href="loan_frm.php">
                
        </fieldset>
        </form>
    </article>
<!-- end content -->
    </div>
    </body>
</html>
