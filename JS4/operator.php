<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilkurang = $a - $b;
$hasilkali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
echo "Hasil Tambah = ". $hasilTambah ."<br>";
echo "Hasil Kurang = ". $hasilkurang ."<br>";
echo "Hasil Kali = ". $hasilkali ."<br>";
echo "Hasil Bagi = ". $hasilBagi ."<br>";
echo "Sisa Bagi = ". $sisaBagi ."<br>";
echo "Hasil pangkat = ". $pangkat ."<br>";
echo "<br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "Apakah hasilnya sama: ". $hasilSama ."<br>";
echo "Apakah hasilnya tidak sama: ". $hasilTidakSama ."<br>";
echo "Apakah hasilnya lebih kecil: ". $hasilLebihKecil ."<br>";
echo "Apakah hasilnya lebih besar: ". $hasilLebihBesar ."<br>";
echo "Apakah hasilnya lebih kecil samadengan: ". $hasilLebihKecilSama ."<br>";
echo "Apakah hasilnya lebih besar samadengan: ". $hasilLebihBesarSama ."<br>";
echo "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "Hasil operasi AND = ". $hasilAnd ."<br>";
echo "Hasil operasi OR = ". $hasilOr ."<br>";
echo "Hasil operasi NOT a = ". $hasilNotA ."<br>";
echo "Hasil operasi NOT b = ". $hasilNotB ."<br>";
echo "<br><br>";

$a += $b;
echo "Hasil += ". $a ."<br>";
$a -= $b;
echo "Hasil -= ". $a ."<br>";
$a *= $b;
echo "Hasil *= ". $a ."<br>";
$a /= $b;
echo "Hasil /= ". $a ."<br>";
$a %= $b;
echo "Hasil %= ". $a ."<br>";
echo "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "Hasil Identik = ". $hasilIdentik ."<br>";
echo "Hasil Tidak Identik = ". $hasilTidakIdentik ."<br>";
echo "<br><br>";

$jumlahKursi = 45;
$jumlahPelanggan = 28;
$sisaKursiKosong = $jumlahKursi - $jumlahPelanggan;
$persentase = $sisaKursiKosong / $jumlahPelanggan * 100;
echo "Persentase kursi yang masih kosong adalah ". $persentase ."%";
?>