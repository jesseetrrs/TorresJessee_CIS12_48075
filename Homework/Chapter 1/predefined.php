<?php
	/*
		Jessee Torres
		Chapter 1 Homework Snippet
	*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Predefined Variables</title>
</head>

<body>
<?php # Script 1.5 - predefined.php
	$file=$_SERVER['SCRIPT_FILENAME'];
	$user= $_SERVER['HTTP_USER_AGENT'];
	$server= $_SERVER['SERVER_SOFTWARE'];
	echo "<p> You are running the file:
	file:<br /><b>$file</b>.</p>\n";
	echo "<p>You are viewing this page
	using:<br /><b>$user</b></p>\n";
	echo "<p>This server is running:
	<br /><b>$server</b>.</p>\n";
?>
</body>
</html>