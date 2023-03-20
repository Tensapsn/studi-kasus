

<?php
$bilangan1 = $_POST['bilangan1'];
$bilangan2 = $_POST['bilangan2'];
$bilangan3 = $_POST['bilangan3'];
$bilangan4 = $_POST['bilangan4'];

if ($bilangan1 > $bilangan2 && $bilangan1 > $bilangan3 && $bilangan1 > $bilangan4) {
  echo "Bilangan terbesar adalah $bilangan1";
} elseif ($bilangan2 > $bilangan1 && $bilangan2 > $bilangan3 && $bilangan2 > $bilangan4) {
  echo "Bilangan terbesar adalah $bilangan2";
} elseif ($bilangan3 > $bilangan1 && $bilangan3 > $bilangan2 && $bilangan3 > $bilangan4) {
  echo "Bilangan terbesar adalah $bilangan3";
} else {
  echo "Bilangan terbesar adalah $bilangan4";
}
?>
