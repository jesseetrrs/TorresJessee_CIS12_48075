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
<title>Grade IF</title>
</head>

<body>
<?php
	//Initliaze the input and declare variables;
	$score=rand(50,100);
	$grade='';
	$score=95;
	//Determine the grade
	if($score>=90){
		$grade='A';
		
	if($score>=80&&$score<90){
		$grade='B';
		
	if($score>=70&&$score<80){
		$grade='C';
	
	if($score>=70&&$score<60){
		$grade='D';
		
	if($score<60){
		$grade='F';
	}
		
	//Output the Results
	echo "<h1>A score of $score = $grade</h1>";
?>

</body>
</html>