<!DOCTYPE html>
<html>
<head>
<title>Soal 1</title>
</head>
<body>
<h1>Mencari Total Tumpukan Baju</h1>
<?php 
$pasangan = 0;
$baju = array(1,2,1,2,1,3,2);
$jumlah = array_count_values($baju);

foreach ($jumlah as $key => $value) {
	$x = $value/2;
	$angka = (int)$x;
	$pasangan = $pasangan + $angka;
}

echo "Jumlah pasangan: ", $pasangan;
?>
</body>
</html>