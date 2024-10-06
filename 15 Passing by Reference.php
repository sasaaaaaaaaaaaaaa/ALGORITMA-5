<?php
function tambahSatu(&$nilai) {
    $nilai++;
}

$angka = 22;
tambahSatu($angka);
echo $angka; // Output: 23
