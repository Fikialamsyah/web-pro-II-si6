<?php
// membuat variable
// $namaVariable = nilaiVariable;
$name = "Fiki Alamsyah";
$age = 21;
$weight = 45.5;

// menampilkan variable
echo "Name : " . $name;
echo "<br>Age : $age";
echo "<br>Weight : $weight";

// menampilkan variable sistem
echo "<br>Dokument Root : " . $_SERVER['DOCUMENT_ROOT'];
echo "<br>Nama File : " . $_SERVER['PHP_SELF'];

// membuat variable constant
// Define('namaVariable', nilaiVariable)
Define('PHI', 3.14);
$r = 10;
$luas = PHI * $r * $r;

echo "<br>luas lingkaran : $luas";

