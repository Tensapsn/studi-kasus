  
<?php
$bilangan1 = $_POST['bilangan1'];
$bilangan2 = $_POST['bilangan2'];

if ($bilangan1 > $bilangan2) {
  echo "Bilangan terbesar adalah $bilangan1";
} elseif ($bilangan2 > $bilangan1) {
  echo "Bilangan terbesar adalah $bilangan2";
} else {
  echo "Kedua bilangan sama";
}
?>
