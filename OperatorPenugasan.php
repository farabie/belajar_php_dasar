<?php

$angka1 = 12;
$angka2 = 11;

$penugasanTambah = $angka1+= $angka2;
echo "Penugasan Tambah : $penugasanTambah\n";
$penugasanKurang= $angka1 -= $angka2;
echo "Penugasan Kurang : $penugasanKurang\n";
$penugasanPerkalian= $angka1 *= $angka2;
echo "Penugasan Kali : $penugasanPerkalian\n";
$penugasanPembagian= $angka1 /= $angka2;
echo "Penugasan Bagi : $penugasanPembagian\n";
$penugasanSisaBagi= $angka1 %= $angka2;
echo "Penugasan Bagi : $penugasanSisaBagi\n";

echo "Contoh Studi Kasus ============\n";

$total = 0;

$chicken = 25_000;
$mangga = 30_000;
$kerupuk = 50_000;

$total += $chicken;
$total += $mangga;
$total += $kerupuk;

var_dump($total);