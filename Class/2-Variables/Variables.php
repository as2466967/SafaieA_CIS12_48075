      <?php
	    /*
		        Azadeh Safaie
			Augest 27th, 2014
			Purpose: comments/ Variables  
	    */
      ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Strings and Variables</title>
</head>
<body>
      <?php
	    // declare variables
		$hours=40;// Worked 40 hours
		$payRate=9;//$'s/hour
		//calculate the paycheck
		$grosspay=$hours*$payRate;
		//output the result
		echo "<p>Hours worked = $hours (hrs)</p>";
		echo '<p>Pay Rate = $$payRate</p>';
		echo "<p>Pay check = ".$grosspay.'</p>'
		
      ?>
</body>
</html>
