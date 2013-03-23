<?php

//Date and Time related utility functions
function age($tm,$end=false) {
	if(!$end) $end = time();
	$cur_tm = $end; $dif = $cur_tm-$tm;
	$pds = array('second','minute','hour','day','week','month','year','decade');
	$lngh = array(1,60,3600,86400,604800,2630880,31570560,315705600);
	for($v = sizeof($lngh)-1; ($v >= 0)&&(($no = $dif/$lngh[$v])<=1); $v--); if($v < 0) $v = 0; $_tm = $cur_tm-($dif%$lngh[$v]);
	$no = floor($no); if($no <> 1) $pds[$v] .='s'; $x=sprintf("%d %s ",$no,$pds[$v]);
	return $x;
}

function future_age($tm,$end=false) {
	if(!$end) $end = time();
	$cur_tm = $end; $dif = ($cur_tm-$tm)*-1;
	$pds = array('second','minute','hour','day','week','month','year','decade');
	$lngh = array(1,60,3600,86400,604800,2630880,31570560,315705600);
	for($v = sizeof($lngh)-1; ($v >= 0)&&(($no = $dif/$lngh[$v])<=1); $v--); if($v < 0) $v = 0; $_tm = $cur_tm-($dif%$lngh[$v]);
	$no = floor($no); if($no <> 1) $pds[$v] .='s'; $x=sprintf("%d %s ",$no,$pds[$v]);
	return $x;
}

//Formatters
function hours($tm,$inc=1){
	$hours = round($tm / round((3600 / $inc)));
	if($hours < 1) $hours = 1;
	return $hours.' hours';
}
