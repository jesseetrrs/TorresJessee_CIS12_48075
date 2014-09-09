<?php
	/*
		Jessee Torres
		September 9, 2014
		Chapter 1 Snippets
	*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Constants</title>
</head>

<body>
<?php # Script 1.9 - constants.php
define ('TODAY', 'September 9, 2014');
echo'<p>Today is ' . TODAY . '.<br />
This server is running version <b>' .
PHP_VERSION . '</b> of PHP on the <b>' .
PHP_OS . '</b> operating system.</p>';
?>
</body>
</html>