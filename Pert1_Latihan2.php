<DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<?php
	$A = 123;
	function Test() { 
	global $A ;
	echo"Nilai A dalam fungsi = $A \n"; 
	}
	Test(); 
	echo"Nilai A luar fungsi = $A \n"; 
	?> 
</body>
</html>
