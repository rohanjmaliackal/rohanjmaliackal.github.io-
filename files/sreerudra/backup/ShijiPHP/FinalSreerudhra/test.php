<?php
$date="09/24/2017";
$timestamp = strtotime($date);
		echo $day = date('l', $timestamp);
		
		
		
		echo "from".$checktimefrom='9:00 am';echo "</br>";
		
		
											echo "to".$checktimeto='9:10 am';echo "</br>";
											echo "st".$consult_from ='9:00 am';echo "</br>";
											echo "end".$consult_to ='5:00 pm';echo "</br>";
											
											
											
											$from=DateTime::createFromFormat('H:i a', $checktimefrom);
						$to=DateTime::createFromFormat('H:i a', $checktimeto);
						$start_time = DateTime::createFromFormat('H:i a', $consult_from);
						$end_time = DateTime::createFromFormat('H:i a', $consult_to);
						
						
											if ($start_time<=$from && $end_time>=$to) { echo "k"; }else{ echo "l";
											}
											
											
											
											
$current_time ="10:00 AM";
$begin = "9:00 AM";
$end   = "5:00 PM";

$date1 = DateTime::createFromFormat('H:i a', $current_time);
$date2 = DateTime::createFromFormat('H:i a', $begin);
$date3 = DateTime::createFromFormat('H:i a', $end);

if ($date1 >= $date2 && $date1 <= $date3) {
   echo 'Here';
} else {
   echo 'Not';
}
											
											
?>


