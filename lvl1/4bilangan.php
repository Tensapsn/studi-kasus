<!-- 1. Mulai
2. Masukkan bilangan pertama (a)
3. Masukkan bilangan kedua (b)
4. Masukkan bilangan ketiga (c)
5. Masukkan bilangan keempat (d)
6. Jika a > b, a > c dan a > d, cetak a sebagai bilangan terbesar
7. Jika b > a, b > c dan b > d, cetak b sebagai bilangan terbesar
8. Jika c > a, c > b dan c > d, cetak c sebagai bilangan terbesar
9. Jika d > a, d > b dan d > c, cetak d sebagai bilangan terbesar
10. Selesai-->

<?php
$a = 6;
$b = 9;
$c = 1;
$d = 8;

if ($a > $b && $a > $c && $a > $d) {
  echo "Bilangan terbesar adalah $a";
} elseif ($b > $a && $b > $c && $b > $d) {
  echo "Bilangan terbesar adalah $b";
} elseif ($c > $a && $c > $b && $c > $d) {
  echo "Bilangan terbesar adalah $c";
} else {
  echo "Bilangan terbesar adalah $d";
}
?>
