<?php
/* menggunakan perulangan while untuk menampilkan semua data pada array ke web browser*/
$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';


// $aplikasi = array(1 => 'gtAkademik', 2 => 'gtFinansi', 3 => 'gtPerizinan', 4 => 'eCampuz', 5 => 'eOviz');

$i = 1;
while ($i <= count($aplikasi)) {
  echo $aplikasi[$i] . "<br>";
  $i++;
}

echo "<hr>";

// menampilkan isi array dengan perulangan foreach
// foreach ($aplikasi as $isi) {
//   echo $isi . "<br>";
// }
