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
<title>Grade Switch</title>
</head>
<body>
<?php
	//Initliaze the input
	$score=rand(50,100);
	//Determine the grade
	switch(true){
		case $score>=90:$grade='A'; break;
		case $score>=80:$grade='B'; break;
		case $score>=70:$grade='C';break;
		case $score>=60:$grade='D';break;
		default:		$grade='F';break;
	
	}
//Output the Results
echo "<h1>A score of $score = $grade</h1>";
?>
</body>
</html>