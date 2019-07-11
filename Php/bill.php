<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Electric Bill Calculator</title>
</head>
	<?php

		$result_final = $result = '';

		if(isset($_POST['submit-unit'])) {
			$units = $_POST['units'];
			if(!empty($units)){
				$result = calculate_bill($units);
				$result_final = 'Total used unit are ' . $units . ' and units cost are ' . $result;
			}
		}

		function calculate_bill($units){
			if($units <= 50){
				$bill = $units * 3.5;
			}

			elseif($units > 50 && $units <= 150){
				$temp = 50 * 3.5;
				$remaining_units = $units - 50;
				$bill = $temp + ($remaining_units * 4.00);
			}
			
			elseif ($units > 150 && $units <= 250) {
				$temp = (50 * 3.5) + (100 * 4.00);
				$remaining_units = $units - 150;
				$bill = $temp + ($remaining_units * 5.2);
			}
			
			else {
				$temp = (50 * 3.5) + (100 * 4.00) + (100 * 5.2);
				$remaining_units = $units - 250;
				$bill = $temp + ($remaining_units * 6.5);
			}

			return number_format((float)$bill, 2, '.', '');
		}
	?>

<body>
	<div id="wrapper">

		<h1>Electricity Bill Calculator (PHP)</h1>

		<form action="" method="POST">
			
			Bill Units: <input type="number" name="units" id="units" placeholder="Enter Your Bill Total Units">
			<input type="submit" name="submit-unit" id="submit-unit" value="Submit">
		</form>
	</div>

	<div>
		 <?php echo '<br>' . $result_final; ?>
	</div>
</body>
</html>