<?php
	/* 
		Jessee Torres
		Sept. 8th 2014
		Purpose: Illustrate Branching Constructs
	*/
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Grade Ternary</title>
</head>

<body>
<?php
	//Initliaze the input
	$score=rand(50,100);
	//Determine the grade
	$grade=$score>=90?'A':
			$score>=80&&$score<90?'B':
			$score>=70&&$score<80?'C':
			$score>=60&&$score<70?'D':'F';
			
		
	
	//Output the Results
	echo "<h1>A score of $score = $grade</h1>";
	
?>

</body>
</html>