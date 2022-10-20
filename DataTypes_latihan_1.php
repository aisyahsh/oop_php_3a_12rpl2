<?php
// Dik
$phi = 3.14;
$r = 5.5;
$t_tabung = 8;
$t_limas = 12;

// Rumus tabung
print "=== volume tabung ===\n";
$volume_tabung = $phi * pow($r,2) * $t_tabung;
$number_format = number_format ($volume_tabung,1);
print "phi = 3.14 \n r = 5.5 \n t = 8m \n"."volume tabung=".$number_format."m2\n";

// Rumus limas


// Luas lingkaran
print "=== Luas lingkaran ===\n";
$luas_lingkaran = $phi * pow($r,2);
$number_format = number_format ($luas_lingkaran,1);
print "luas lingkaran =".round($luas_lingkaran,1)."m2\n";

// Luas lingkaran hilang
print "=== Luas lingkaran hilang ===\n";
$lingkaran_hilang = $phi*pow($r,2)/100;
print 'Luas lingkaran hilang ='.round($luas_lingkaran,1)."m2\n";



