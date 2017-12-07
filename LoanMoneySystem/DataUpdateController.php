<?php
	require 'connectdb.php';
    
    $loanIDCompact = $_POST['loan_id_compact'];
    $loanDateadd = $_POST['loan_dateadd'];
    $provinceID = $_POST['province_id'];
    $disID = $_POST['dis_id'];
    $munID = $_POST['mun_id'];
    $loanStatus = $_POST['loan_status0'];
    $loanMoney = $_POST['loan_money'];
    $loanBank = $_POST['loan_bank'];
	$json = file_get_contents('json/changwats.json');
	$obj = json_decode($json);
	$dataC=$obj->{'th'}->{'changwats'};
	for ($item =0; $item  < count($dataC); $item ++){
		if($provinceID==$dataC[$item]->{'pid'}){
			$getProvince = $dataC[$item]->{'name'};
			break;
		 } 
	}
	$json = file_get_contents('json/amphoes.json');
	$obj = json_decode($json);
	$dataC=$obj->{'th'}->{'amphoes'};
	for ($item =0; $item  < count($dataC); $item ++){
		if($disID==$dataC[$item]->{'pid'}){
			$getDis = $dataC[$item]->{'name'};
			break;
		 } 
	}
	$json = file_get_contents('json/tambons.json');
	$obj = json_decode($json);
	$dataC=$obj->{'th'}->{'tambons'};
	for ($item =0; $item  < count($dataC); $item ++){
		if($munID==$dataC[$item]->{'pid'}){
			$getMun = $dataC[$item]->{'name'};
			break;
		 } 
	}
	$q = "INSERT INTO payment (loan_id_compact,loan_dateadd,province_id,dis_id,mun_id,loan_status0,loan_money,loan_bank) VALUES 
    ('$loanIDCompact','$loanDateadd','$getProvince','$getDis','$getMun','$loanStatus','$loanMoney','$loanBank')";

    $result = mysqli_query($dbcon, $q);
    mysqli_close($dbcon);
    if ($result){
    	header("Location: index.php");
    	return true;
    }else {
        return false;
    }
 	
?>