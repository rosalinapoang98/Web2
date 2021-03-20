<html>
<head><title> </title></head>
<body>
<?php
$brush_price =7;  
$counter = 8; 
echo "<table border=\"1\" align=\"center\">"; 
echo "<tr><th>Quantity</th>"; 
echo "<th>Price</th></tr>"; 
while ( $counter <= 100 ) { 
	echo "<tr><td>";  
	echo $counter;  
	echo "</td><td>";
	echo $brush_price * $counter;  
	echo "</td></tr>";  
	$counter = $counter + 10; 
	} 
	echo "</table>"; 
	?> 
</body>
</html>