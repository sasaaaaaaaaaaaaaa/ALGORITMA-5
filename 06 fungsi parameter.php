<?php
// mmbuat fungsi
function perkenalan($nama, $salam){
  echo $salam.", ";
  echo "Perkenalkan, nama kita ".$nama."<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("putri", "Hi");

  echo "<hr>";

  $saya = "Alika";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);
?>

