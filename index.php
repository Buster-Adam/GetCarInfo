<!DOCTYPE html>
<html>
<head>
</head>

<body>


<?php 
//echo readfile("carinfo.txt");

$infile = fopen("carinfo.txt","r") or die("Unable to open file!");
while(!feof($infile))
	echo fgets($infile)."<br>";
fclose($infile);


class Car{
private $make;
	

};

?>




</body>
</html>
