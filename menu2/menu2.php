<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>menu</title>
</head>
<body>

	<?php


		$d= date("l");

		$m ="Monday";
		$t ="Tuesday";
		$w ="Wednesday";
		$th ="Thursday";
		$f="Friday";
		$s="Saturday";
		$ss="Sunday";


		if ($d==$m) {

			echo "Pizza";

		} 

		elseif ($d==$t) {

			echo "Burger";

		}

		elseif ($d==$w) {

			echo "Haleem ";

		}

		elseif ($d==$th) {

			echo "Shawarma Sandwich ";

		}

		elseif ($d==$f) {

			echo "mutton karahi";

		}

		elseif ($d==$s) {

			echo "chinese rice";

		}

		else {
			
			echo "Aloo Goshi";
		}
	?>
	
</body>
</html>