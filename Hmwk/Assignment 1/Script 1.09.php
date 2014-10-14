<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type"
content="text/html; charset=utf-8" />
<title>Constants</title>
</head>

<body>
	<?php # Script 1.9 - constants.php
	
	// Set today's date as a constant:
	 define ('TODAY', 'September 01, 2014');
	
	// Print a message, using predefined constants and the TODAY constant:
	echo '<p>Today is ' . TODAY . '.<br/> This server is running version <b>' . PHP_VERSION . '</b> of PHP on the <b>' . PHP_OS . '</b> operating system.</p>';

	?>
</body>
</html>