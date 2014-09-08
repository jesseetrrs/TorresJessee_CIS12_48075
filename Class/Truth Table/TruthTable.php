<?php
/*
	Jessee Torres
    September 3, 2014
    Purpose: Duplicate Truth Table
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
 <table width="400" border="1">
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
	
    <table width="200" border="1">
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
		echo"<td>".($x^$y?^$z?"T":"F")."</td>";
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