<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>
		Try Again...
	</title>
</head>
<body>
<?php
$d = date("d");
$d=$d+2;
$date = $d .date("/m/Y")."";
echo "<h1>"."No Appoinment Available On ". $date ."</h1>;";
echo "<h1>"."Thanks..."."</h1>;";
?>

</body>
</html>

