<?php
	$month = date('m');
	$year = date('Y');
	$monthDays = cal_days_in_month(CAL_GREGORIAN,$month,$year);
	$date = strtotime($year . ' ' . $month - '-01');
	$firstWeekDay = date('w', $date);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calendar in PHP</title>
</head>
<body>
	<div>
		<table >
			<tr>
				<th colspan="7" >
					<?php echo $month . ' | ' . $year; ?>
				</th>
			</tr>
			<tr>
				<th>Sunday</th>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>
				<th>Saturday</th>
			</tr>
			<?php
				for($i = 1; $i <= $firstWeekDay;$i++){
					echo '<td></td>';
				}

				$dayCount = $firstWeekDay;

				for($i = 1; $i <= $monthDays;$i++){
					echo '<td>' . $i . '</td>';
					if($dayCount === 6){
						echo '</tr>';
						$dayCount = 0;
					}else{
						$dayCount++;
					}
				}
			?>
		</table>
	</div>
	
</body>
</html>