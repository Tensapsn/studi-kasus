<?php
// Input 3 buah bilangan bulat
$bilangan1 = $_POST['bilangan1'];
$bilangan2 = $_POST['bilangan2'];
$bilangan3 = $_POST['bilangan3'];

// Urutkan bilangan dari nilai terkecil hingga nilai terbesar
if ($bilangan1 < $bilangan2) {
  if ($bilangan1 < $bilangan3) {
    if ($bilangan2 < $bilangan3) {
      $urutan = "$bilangan1, $bilangan2, $bilangan3";
    } else {
      $urutan = "$bilangan1, $bilangan3, $bilangan2";
    }
  } else {
    $urutan = "$bilangan3, $bilangan1, $bilangan2";
  }
} else {
  if ($bilangan2 < $bilangan3) {
    if ($bilangan1 < $bilangan3) {
      $urutan = "$bilangan2, $bilangan1, $bilangan3";
    } else {
      $urutan = "$bilangan2, $bilangan3, $bilangan1";
    }
  } else {
    $urutan = "$bilangan3, $bilangan2, $bilangan1";
  }
}

// Cetak bilangan dalam urutan yang sudah diurutkan
echo "Bilangan dalam urutan terurut: $urutan";
?>
