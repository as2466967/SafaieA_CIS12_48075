<?php
/*
	azadeh Safaie
    Sept 3rd, 2014
    Purpuse: Duplicate Truth Table
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
	//echo out a heading
	echo "<h1> Truth Table<h1/>";
	?>
    <table width="200" border="1">
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
  </tr> <tr>
  <?php
	$x=true;
	$y=true;
		echo "<td>".($x?"T":"F")."</td>";
		echo "<td>".($y?"T":"F")."</td>";
		echo "<td>".(!$x?"T":"F")."</td>";
		echo "<td>".(!$y?"T":"F")."</td>";
		echo "<td>".($x&&$y?"T":"F")."</td>";
		echo "<td>".($x||$y?"T":"F")."</td>";
		echo "<td>".($x^$y?"T":"F")."</td>";
		echo "<td>".($x^$y^$y?"T":"F")."</td>";
		echo "<td>".($x^$y^$x?"T":"F")."</td>";
		echo "<td>".(!($x&&$y)?"T":"F")."</td>";
		echo "<td>".(!$x||!$y?"T":"F")."</td>";
		echo "<td>".(!($x||$y)?"T":"F")."</td>";
		echo "<td>".(!$x&&!$y?"T":"F")."</td>";
																		
  ?>
  </tr><tr>
  <?php
	$y=false;
		echo "<td>".($x?"T":"F")."</td>";
		echo "<td>".($y?"T":"F")."</td>";
		echo "<td>".(!$x?"T":"F")."</td>";
		echo "<td>".(!$y?"T":"F")."</td>";
		echo "<td>".($x&&$y?"T":"F")."</td>";
		echo "<td>".($x||$y?"T":"F")."</td>";
		echo "<td>".($x^$y?"T":"F")."</td>";
		echo "<td>".($x^$y^$y?"T":"F")."</td>";
		echo "<td>".($x^$y^$x?"T":"F")."</td>";
		echo "<td>".(!($x&&$y)?"T":"F")."</td>";
		echo "<td>".(!$x||!$y?"T":"F")."</td>";
		echo "<td>".(!($x||$y)?"T":"F")."</td>";
		echo "<td>".(!$x&&!$y?"T":"F")."</td>";
  ?>
  </tr><tr>
  <?php
	$x=false;
	$y=true;
		echo "<td>".($x?"T":"F")."</td>";
		echo "<td>".($y?"T":"F")."</td>";
		echo "<td>".(!$x?"T":"F")."</td>";
		echo "<td>".(!$y?"T":"F")."</td>";
		echo "<td>".($x&&$y?"T":"F")."</td>";
		echo "<td>".($x||$y?"T":"F")."</td>";
		echo "<td>".($x^$y?"T":"F")."</td>";
		echo "<td>".($x^$y^$y?"T":"F")."</td>";
		echo "<td>".($x^$y^$x?"T":"F")."</td>";
		echo "<td>".(!($x&&$y)?"T":"F")."</td>";
		echo "<td>".(!$x||!$y?"T":"F")."</td>";
		echo "<td>".(!($x||$y)?"T":"F")."</td>";
		echo "<td>".(!$x&&!$y?"T":"F")."</td>";																	
  ?>
  </tr><tr>
  <?php
	$x=false;
	$y=false;
		echo "<td>".($x?"T":"F")."</td>";
		echo "<td>".($y?"T":"F")."</td>";
		echo "<td>".(!$x?"T":"F")."</td>";
		echo "<td>".(!$y?"T":"F")."</td>";
		echo "<td>".($x&&$y?"T":"F")."</td>";
		echo "<td>".($x||$y?"T":"F")."</td>";
		echo "<td>".($x^$y?"T":"F")."</td>";
		echo "<td>".($x^$y^$y?"T":"F")."</td>";
		echo "<td>".($x^$y^$x?"T":"F")."</td>";
		echo "<td>".(!($x&&$y)?"T":"F")."</td>";
		echo "<td>".(!$x||!$y?"T":"F")."</td>";
		echo "<td>".(!($x||$y)?"T":"F")."</td>";
		echo "<td>".(!$x&&!$y?"T":"F")."</td>";																	
  ?>
  </tr>
  </table>  
</body>
</html>