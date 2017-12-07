<?php
    require 'connectdb.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css" >
        <title>ระบบสารสนเทศและฐานข้อมูล</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
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
            <a href="show_loan_tb.php">รายงานจ่ายเงินกู้</a>
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
    
        <h1>รับชำระเงินกู้และดอกเบี้ย </h1>
        <form action="DataUpdateController.php" method="post" enctype="multipart/form-data" id="form1">
        <legend>รับชำระเงินกู้และดอกเบี้ย</legend>
            <div class="col-md-12">
                <div class="col-md-2"><label class="text-center">เลขที่สัญญา: </label></div>
                <div class="col-md-10"><input name="loan_id_compact" type="text" id="loan_id_compact" class="form-control"></div>
            </div>
            <div class="col-md-12" style="margin-top:1em;" class="text-center">
                <div class="col-md-2"><label class="text-center">วันที่รับชำระ: </label></div>
                <div class="col-md-10"><input name="loan_dateadd" type="date" id="loan_dateadd" class="form-control"></div>
            </div>
            <div class="col-md-12" style="margin-top:1em;" class="text-center">
                <div class="col-md-2"><label class="text-center">หน่วยงาน: </label></div>
                <div class="col-md-3">
                    <select name="province_id" id="province_id" class="form-control">
                        <option value="0">--เลือกจังหวัด--</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select name="dis_id" id="dis_id" class="form-control">
                        <option value="0">--เลือกอำเภอ--</option>
                    </select>                    
                </div>
                <div class="col-md-3">
                    <select name="mun_id" id="mun_id" class="form-control">
                        <option value="0">--เทศบาล--</option>
                    </select>                    
                </div>
            </div>
            <div class="col-md-12" style="margin-top:1em;" class="text-center">
                <div class="col-md-1"><label class="text-center">สถานะ: </label></div>
                <div class="col-md-3">
                    <input type="radio" name="loan_status0" id="loan_status0" value="ใช้งาน">ใช้งาน 
                    <input type="radio" name="loan_status1" id="loan_status0" value="อยู่ระหว่างการรอ">อยู่ระหว่างการรอ
                </div>
                <div class="col-md-2">
                    <label class="text-center">จำนวนเงิน: </label>
                </div>
                <div class="col-md-6">
                    <input name="loan_money" type="text" id="loan_money" class="form-control">
                </div>
            </div>
            <div class="col-md-12" style="margin-top:1em;" class="text-center">
                <div class="col-md-2"><label class="text-center">ฝากธนาคาร: </label></div>
                <div class="col-md-10">
                    <select class="form-control" name="loan_bank" id="loan_bank">
                        <option value="ไม่มีธนาคาร">--เลือกธนาคาร--</option>
                        <option value="กรุงไทย">กรุงไทย</option>
                        <option value="กรุงเทพ">กรุงเทพ</option>
                        <option value="กสิกร">กสิกร</option>
                        <option value="ไทยพาณิช">ไทยพาณิช</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12" style="margin-top:2em;">
                <div class="col-md-4">
                    <input type="submit" id="submit" value="บันทึกข้อมูล" class="bbtn btn-success form-control">
                </div>
                <div class="col-md-4">
                    <input type="button" id="back" value="ย้อนกลับ" class="btn btn-danger form-control">
                </div>
                <div class="col-md-4">
                    <input type="button" id="print" value="พิมพ์ใบฝาก" class="btn btn-info form-control">
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-12">

        <table id="example" class="display" cellspacing="0" width="100%">
            <thead class="text-center">
                <tr class="text-center">
                    <th class="text-center">เลขที่สัญญา</th>
                    <th class="text-center">วันที่รับชำระ</th>
                    <th class="text-center">หน่วยงาน</th>
                    <th class="text-center">สถานะ</th>
                    <th class="text-center">จำนวนเงิน</th>
                    <th class="text-center">ฝากธนาคาร</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $sql = "SELECT loan_id_compact,loan_dateadd,province_id,dis_id,mun_id,loan_status0,loan_money,loan_bank FROM payment";
            $result = $dbcon->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo  '<tr><td>'.$row["loan_id_compact"].'</td>'.'<td>'.$row["loan_dateadd"].'</td><td>'.$row["province_id"].'-'.$row["dis_id"].'-'.$row["mun_id"].'</td><td>'.$row["loan_status0"].'</td><td>'.$row["loan_money"].'</td><td>'.$row["loan_bank"].'</td>'."</tr>";
                    }
                }
                ?>
            </tbody>
        </table>

    </div>
    <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
             $('#example').DataTable();

        var amphoes,tambons;
        $.get( "json/changwats.json",function(data){
            for(var item=0;item<data['th']['changwats'].length;item++){
                $('#province_id').append($("<option></option>").attr("value",data['th']['changwats'][item]['pid']).text(data['th']['changwats'][item]['name']));
            }
        });
        $.get("json/amphoes.json",function(data){
            amphoes=data['th']['amphoes'];
        });
         $.get("json/tambons.json",function(data){
            tambons=data['th']['tambons'];
        });
        $("#province_id").change(function(){
            var idProvince=$("#province_id").val();
            for(var item=0;item<amphoes.length;item++){
                if(idProvince==amphoes[item]['changwat_pid']){
                    $('#dis_id').append($("<option></option>").attr("value",amphoes[item]['pid']).text(amphoes[item]['name']));
                }else{
                    $("#dis_id option[value='"+amphoes[item]['pid']+"']").remove();
                }
            }
            $("#mun_id option").remove();
            $('#mun_id').append($("<option></option>").attr("value",0).text('--เทศบาล--'));
        });
        $("#dis_id").change(function(){
            var idDis=$("#dis_id").val();
            for(var item=0;item<tambons.length;item++){
                if(idDis==tambons[item]['amphoe_pid']){
                    $('#mun_id').append($("<option></option>").attr("value",tambons[item]['pid']).text(tambons[item]['name']));
                }else{
                    $("#mun_id option[value='"+tambons[item]['pid']+"']").remove();
                }
            }
        });
    </script>
    </body>
</html>
