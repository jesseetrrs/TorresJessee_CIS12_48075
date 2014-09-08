<?php
/*
	Jessee Torres
    Sept 3rd, 2014
    Purpose:  Duplicate Truth Table
*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Truth Table</title>
</head>

<body>
	<?php 
	//Echo out a heading
	echo "<h1> Truth Table </h1>";
	?>
 <table width="450" border="1">
  <tbody>
    <tr>
         <th>X</th>
         <th>Y</th>
         <th>!X</th>
         <th>!Y</th>
         <th>X&&Y</th>
         <th>X||Y</th>
         <th>X^Y</th>
         <th>X^Y^Y</th>
         <th>X^Y^X</th>
         <th>!(X&&Y)</th>
         <th>!X||!Y</th>
         <th>!(X||Y)</th>
         <th>!X&&!Y</th>
    	 
    </tr>
	
    <table width="550" border="1">
  <tbody>
    <tr>
    	<?php
		$x=true;
		$y=true;
		echo"<td>".($x?"T":"F")."</td>";
		echo"<td>".($y?"T":"F")."</td>";
		echo"<td>".(!$x?"T":"F")."</td>";
		echo"<td>".(!$y?"T":"F")."</td>";
		echo"<td>".($x&&$y?"T":"F")."</td>";
		echo"<td>".($x||$y?"T":"F")."</td>";
		echo"<td>".($x^$y?"T":"F")."</td>";
		echo"<td>".($x^$y^$y?"T":"F")."</td>";
		echo"<td>".($x^$y^$x?"T":"F")."</td>";
		echo"<td>".(!($x&&$y)?"T":"F")."</td>";
		echo"<td>".(!$x||!$y?"T":"F")."</td>";
		echo"<td>".(!($x||$y)?"T":"F")."</td>";
		echo"<td>".(!($x||$y)?"T":"F")."</td>";
			/*QUESTION: I do not know how to write out the  
			correct code for !$x&&!$y I try but there is an 
			error or it comes out as true. I used Demorgans 
			Law to cheat and write the string.
			*/
		?>
        </tr><tr>
        <?php
		$x=true;
		$y=false;
		echo"<td>".($x?"T":"F")."</td>";
		echo"<td>".($y?"T":"F")."</td>";
		echo"<td>".(!$x?"T":"F")."</td>";
		echo"<td>".(!$y?"T":"F")."</td>";
		echo"<td>".($x&&$y?"T":"F")."</td>";
		echo"<td>".($x||$y?"T":"F")."</td>";
		echo"<td>".($x^$y?"T":"F")."</td>";
		echo"<td>".($x^$y^$y?"T":"F")."</td>";
		echo"<td>".($x^$y^$x?"T":"F")."</td>";
		echo"<td>".(!($x&&$y)?"T":"F")."</td>";
		echo"<td>".(!$x||!$y?"T":"F")."</td>";
		echo"<td>".(!($x||$y)?"T":"F")."</td>";
		echo"<td>".(!($x||$y)?"T":"F")."</td>";
			/*QUESTION: I do not know how to write out the  
			correct code for !$x&&!$y I try but there is an 
			error or it comes out as true. I used Demorgans 
			Law to cheat and write the string.
			*/
		?>
        </tr><tr>
        </tr><tr>
        </tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

</body>
</html>