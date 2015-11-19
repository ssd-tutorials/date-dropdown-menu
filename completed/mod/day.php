<?php
if (!empty($_GET['year']) && !empty($_GET['month'])) {
	
	$year = $_GET['year'];
	$month = strlen($_GET['month']) < 2 ? '0'.$_GET['month'] : $_GET['month'];
	
	$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
	
	$out  = '<select name="day" id="day">';
	$out .= '<option value="">--</option>';
	for($i = 1; $i <= $days; $i++) { 
		$i = strlen($i) < 2 ? "0{$i}" : $i;
		$out .= '<option value="'.$i.'">';
		$out .= $i;
		$out .= '</option>';
	}
	$out .= '</select>';
	
	echo json_encode(array('error' => false, 'menu' => $out));
	
} else {
	echo json_encode(array('error' => true));
}