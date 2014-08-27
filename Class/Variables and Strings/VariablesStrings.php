<?php
/*	I
	Jessee Torres
	August 27,2014
	Purpose: Comments/Variables/Strings
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Strings and Variables</title>
</head>

<body>
	<?php
	//Declare Variables
	$hours=40;//Worked 40 hours
	$payRate=9;//$'s/hour
	//Calculate the paycheck
	$grossPay=$hours*$payRate;
	//Output the result
	echo "<p>Hours Worked = $hours (hrs)</p>";
	echo '<p>Pay Rate = $$payRate</p>';
	echo "<p>Pay Check = $".$grossPay.'</p>';
	
	?>
</body>
</html>