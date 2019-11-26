<!DOCTYPE html>
<html>
<head>
<title>Soal 2</title>
</head>
<body>
<h1>Mencari Total Mainan Terbanyak</h1>
<?php 

$mainan = array(1,12,5,111,200,1000,10);
$panjang = sizeof($mainan);
$uang = 50;
$data = array();

for ($i=0; $i < $panjang; $i++) { 
	$tambah = $mainan[$i];
	if ($mainan[$i]>=$uang) {
		$x=$tambah;
	}
	else{
		$x= $tambah+$mainan[$i];
		if ($x<=$uang) {
			$tambah = $tambah+$mainan[$i];
			array_push($data,$mainan[$i]);
		}
	}
}
foreach ($data as $value) {
	echo $value;
	echo ' , ';
}

?>
</body>
</html>