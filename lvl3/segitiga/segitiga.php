<?php
// Input 3 buah bilangan yang masing-masing menyatakan panjang sisi segitiga
$sisi1 = $_POST['sisi1'];
$sisi2 = $_POST['sisi2'];
$sisi3 = $_POST['sisi3'];

// Periksa jenis segitiga
if ($sisi1 <= 0 || $sisi2 <= 0 || $sisi3 <= 0) {
  echo "Input tidak valid. Nilai sisi tidak boleh nol atau negatif.";
} else {
if ($sisi1 == $sisi2 && $sisi1 == $sisi3) {
  echo "SAMA SISI";
} elseif ($sisi1 == $sisi2 || $sisi1 == $sisi3 || $sisi2 == $sisi3) {
  echo "SAMA KAKI";
} else {
  echo "SEMBARANG";
}
}
?>
