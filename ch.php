<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Challange Praktikum 9</title>
</head>

<body>
	<form method="POST">
		Masukkan nama anda = <input type="text" name="nama"><br>
		Masukkan angka pertama = <input type="number" name="angka1"><br>
		Masukkan angka kedua = <input type="number" name="angka2"><br>
		</textarea><br>
		<input type="submit" name="kirim" value="kirim">
	</form>
	<?php


if (isset($_POST ['kirim'])) {
	$angka1 = $_POST['angka1'];
	$angka2 = $_POST['angka2'];
	
	
	$tambah = $angka1 + $angka2;
	$kurang = $angka1 - $angka2;
	$kali = $angka1 * $angka2;
	$bagi = $angka1 / $angka2;
	$modulus = $angka1 % $angka2;
	
	
	echo "<h2> <br> Perhitungan Aritmatika </h2>";
	echo "Nama : $_POST[nama]";
	echo "<br>$angka1 + $angka2 = $tambah";
	echo "<br>$angka1 - $angka2 = $kurang";
	echo "<br>$angka1 * $angka2 = $kali";
	echo "<br>$angka1 / $angka2 = $bagi";
	echo "<br>$angka1 % $angka2 = $modulus";
		}
	?>
</body>
</html>
