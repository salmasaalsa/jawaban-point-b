<?php
echo "Nomor 2 bagian i"."<br />";
$date = new DateTime('2020-11-23');
echo $date->format('n-y-j')."<br />"."<br />"."<br />";

echo "Nomor 2 bagian ii"."<br />";
$date = "2020-11-23";
$date = (new DateTime($date))->modify('+6 month')->format('m-Y-d');
echo $date."<br />"."<br />"."<br />";

echo "Nomor 2 bagian iii"."<br />";
$tanggal = new DateTime('2020-11-23');
$today = new DateTime('today');
$y = $today->diff($tanggal)->y;
$m = $today->diff($tanggal)->m;
$d = $today->diff($tanggal)->d;
echo "Umur: " . $y . " tahun " . $m . " bulan " . $d . " hari";
?>