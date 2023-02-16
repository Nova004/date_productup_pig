<?php
function dates_thai($dates){
	$years=substr($dates,0,4);
	$monts=substr($dates,5,2);
	$days=substr($dates,8,2);
	switch($monts){
		case "01": $mont_th="ม.ค."; break;
		case "02": $mont_th="ก.พ."; break;
		case "03": $mont_th="มี.ค."; break;
		case "04": $mont_th="เม.ย."; break;
		case "05": $mont_th="พ.ค."; break;
		case "06": $mont_th="มิ.ย."; break;
		case "07": $mont_th="ก.ค."; break;
		case "08": $mont_th="ส.ค."; break;
		case "09": $mont_th="ก.ย."; break;
		case "10": $mont_th="ต.ค."; break;
		case "11": $mont_th="พ.ย."; break;
		case "12": $mont_th="ธ.ค."; break;
	}
	$years_th=$years+543;
	$date_show="$days $mont_th $years_th";
	return $date_show;
}
?>


