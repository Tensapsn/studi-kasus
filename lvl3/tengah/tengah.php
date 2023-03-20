<?php
// Input 3 buah bilangan bulat
$bilangan1 = $_POST['bilangan1'];
$bilangan2 = $_POST['bilangan2'];
$bilangan3 = $_POST['bilangan3'];

// Cari bilangan dengan nilai tengah
if ($bilangan1 > $bilangan2) {
  if ($bilangan1 < $bilangan3) {
    $nilai_tengah = $bilangan1;
  } elseif ($bilangan2 > $bilangan3) {
    $nilai_tengah = $bilangan2;
  } else {
    $nilai_tengah = $bilangan3;
  }
} else {
  if ($bilangan1 > $bilangan3) {
    $nilai_tengah = $bilangan1;
  } elseif ($bilangan2 < $bilangan3) {
    $nilai_tengah = $bilangan2;
  } else {
    $nilai_tengah = $bilangan3;
  }
}

// Cetak bilangan dengan nilai tengah
echo "Bilangan dengan nilai tengah: $nilai_tengah";
?>
