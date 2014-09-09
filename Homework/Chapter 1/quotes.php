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
<title>Quotes</title>
</head>

<body>
<?php # Script 1.10 - quotes.php
//Setting the variables
$quantity = 30;
$price =  119.95;
$taxrate = .05;
//Calculate the totals
$total = $quantity * $price;
$total = $total + ($total * $taxrate);
//Format the total
$total = number_format ($total,2);
//Print the results
echo "<h3>Using double quotation
marks:</h3>";
echo"<p>You are purchasing
<b>$quantity</b> widget(s) at a cost
of <b>\$$price</b> each. With tax,
the total comes to <b>\$$total</b>.
</p>\n";

echo '<h3>Using double quotation
marks:</h3>';
echo'<p>You are purchasing
<b>$quantity</b>widget(s) at a cost
of <b>\$$price<.b> each. With tax,
the total comes to <b>\$$total</b>.
</p>\n';
?>
</body>
</html>