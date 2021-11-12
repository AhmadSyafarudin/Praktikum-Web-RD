<?php 
  $bil1 = $_POST['bil1'];
  $bil2 = $_POST['bil2'];
  $opt = $_POST['operator'];
  
  function penjumlahan ($bil1, $bil2) {
    $total = $bil1 + $bil2;
    echo "PENJUMLAHAN <br>";
    echo "Operator : + <br>";
    echo "Hasil : $total";
  }

  function pengurangan ($bil1, $bil2) {
    $total = $bil1 - $bil2;
    echo "PENGURANGAN <br>";
    echo "Operator : - <br>";
    echo "Hasil : $total";
  }

  function pembagian ($bil1, $bil2) {
    $total = $bil1 / $bil2;
    echo "PEMBAGIAN <br>";
    echo "Operator : / <br>";
    echo "Hasil : $total";
  }

  function perkalian ($bil1, $bil2) {
    $total = $bil1 * $bil2;
    echo "PERKALIAN <br>";
    echo "Operator : * <br>";
    echo "Hasil : $total";
  }

  function modulus ($bil1, $bil2) {
    $total = $bil1 % $bil2;
    echo "MODULUS <br>";
    echo "Operator : % <br>";
    echo "Hasil : $total";
  }

  echo "Bilangan 1 = $bil1";
  echo "<br>";
  echo "Bilangan 2 = $bil2 <br><br>";

  switch ($opt) {
    case "+" :
      penjumlahan($bil1, $bil2);
      break;
    
    case "-" :
      pengurangan($bil1, $bil2);
      break;
    
    case "/" :
      pembagian($bil1, $bil2);
      break;
    
    case "*" :
      perkalian($bil1, $bil2);
      break;
    
    case "%" :
      modulus($bil1, $bil2);
      break;
    
    case "all" :
      echo "Berikut hasil semua operasi <br><br>";
      penjumlahan($bil1, $bil2);
      echo "<br>";
      echo "<br>";
      pengurangan($bil1, $bil2);
      echo "<br>";
      echo "<br>";
      pembagian($bil1, $bil2);
      echo "<br>";
      echo "<br>";
      perkalian($bil1, $bil2);
      echo "<br>";
      echo "<br>";
      modulus($bil1, $bil2);
      break;
  }

?>