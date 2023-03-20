<!-- 1. Mulai
2. Masukkan bilangan pertama (a)
3. Masukkan bilangan kedua (b)
4. Masukkan bilangan ketiga (c)
5. Jika a > b dan a > c, cetak a sebagai bilangan terbesar
6. Jika b > a dan b > c, cetak b sebagai bilangan terbesar
7. Jika c > a dan c > b, cetak c sebagai bilangan terbesar
8. Selesai -->

<?php
$a = 7;
$b = 5;
$c = 2;

if ($a > $b && $a > $c) {
  echo "Bilangan terbesar adalah $a";
} elseif ($b > $a && $b > $c) {
  echo "Bilangan terbesar adalah $b";
} else {
  echo "Bilangan terbesar adalah $c";
}
?>
