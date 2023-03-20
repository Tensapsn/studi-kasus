
<?php
$bilangan1 = $_POST['bilangan1'];
$bilangan2 = $_POST['bilangan2'];
$bilangan3 = $_POST['bilangan3'];

if ($bilangan1 > $bilangan2 && $bilangan1 > $bilangan3) {
  echo "Bilangan terbesar adalah $bilangan1";
} elseif ($bilangan2 > $bilangan1 && $bilangan2 > $bilangan3) {
  echo "Bilangan terbesar adalah $bilangan2";
} else {
  echo "Bilangan terbesar adalah $bilangan3";
}
?>

