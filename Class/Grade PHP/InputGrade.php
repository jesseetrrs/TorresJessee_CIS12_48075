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
	$grade=($score>=90)?'A':(
			($score>=80)?'B':(
			($score>=70)?'C':(
			($score>=60)?'D':'F')));
//Paranthesis needed because it should be written as one line of code 			notice semicoloncat end of F. Only need paranethsis in PHP, but it will work in other languages. So keep and impliment for synchronisisty. 
//Output the Results
echo "<h1>A score of $score = $grade</h1>";
	
?>

</body>
</html>