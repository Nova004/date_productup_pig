<?php
function dates_thai($dates){
	$years=substr($dates,0,4);
	$monts=substr($dates,5,2);
	$days=substr($dates,8,2);
	switch($monts){
		case "01": $mont_th="มกราคม"; break;
		case "02": $mont_th="กุมภาพันธ์"; break;
		case "03": $mont_th="มีนาคม"; break;
		case "04": $mont_th="เมษายน"; break;
		case "05": $mont_th="พฤษภาคม"; break;
		case "06": $mont_th="มิถุนายน"; break;
		case "07": $mont_th="กรกฎาคม"; break;
		case "08": $mont_th="สิงหาคม"; break;
		case "09": $mont_th="กันยายน"; break;
		case "10": $mont_th="ตุลาคม"; break;
		case "11": $mont_th="พฤศจิกายน"; break;
		case "12": $mont_th="ธันวาคม"; break;
	}
	$years_th=$years+543;
	$date_show="$days $mont_th $years_th";
	return $date_show;
}
?>


