<?php
// echo "Hello World";
// echo "<br>ayam bakar";

// $nama = "assad";
// $NAMA = "<br>assad1";
// echo $nama;
// echo $NAMA;

// $umur = 26;
// echo "umur syaa adalah $umur";


// ini adalah komentar
// echo "Hello world";

/*
ini adalah komentar 
yang lebih dari satu 
baris
*/

// if($umur > 18){
//     echo "Kamu Sudah Dewasa";
//     echo "Selamat Datang";
//     echo "Kamu boleh minum kopi";
// }

// ini penggunaan echo
// echo "<h2>Belajar PHP itu Mudah!</h2>";
// echo("Hello World!<br>");
// echo "Aku Sedang Belajar PHP!<br>";
// echo "ini", "text", "terpisah.";

// // ini pengggunaan print
// print "<h2>Belajar PHP dari Nol!</h2>";
// print "Hello World!<br>";
// print "Belajar mencetak text di PHP!";

// penerapan fungsi print
// $cetak = print("Hello World!");

// ini contoh error
// print("Hello", "Wolrd!")

// ini perhitunganya jika + itu di tambah jika (.) itu menambahkan angka saja
// echo "1" + "1"; //akan menghasilkan 2
// echo "1" . "1" // akan menghasilkan 11
// echo "ayam"."ayam";

// menggabungkan sting atau text di php

use LDAP\Result;

$txt1 = "Tutorial PHP";
$txt2 = "Assad.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "aku belajar pemograman PHP di ".$txt2."<br>";
echo $x + $y;
echo "<br>";
echo "<br>";

$x = 10;
$y = 100;
$a = 2;

print $x * $y;
echo "<br>";
print $x + $a;
echo "<br>";
print $x / $a;

echo "<br>";

// menghitung jumlah akrakter
$txt = "Belajar PHP ahh";
echo strlen ($txt);

echo "<br>";

// menghitung jumlah kata
$kalimat = "Belajar pemrograman di malasngoding";
echo str_word_count($kalimat);

echo "<br>";

// membalik kata
$txt1 = "Belajar PHP AJA!";
echo strrev($txt1);

echo "<br>";
// menggabungkan dua stirng
echo "Ayam ","Goreng";

echo "<br>";

// berhitung
$x = 5;
$y = 10;
print( $x + $y);

echo "<br>";
echo "<br>";

// fungsi printf
$tgt = "Assad.com";
echo "Aku Belajar pemrogramana PHP di " . $txt . "<br>";


$tht = "assad.com";
printf("Aku Belajar Pemograman di %s<br>", $txt);

echo "<br>";

// misal kita punya bilangan  dengan notasi e seperti ini 
$harga = 1000000;

// jika kita cetak dnegan echo
echo "Harga adalah Rp $harga";
echo "<br>";
// jika kita cetak dengan printif
printf("Harganya adalah Rp %.2f", $harga);

echo "<br>";
// mencetak tanda kutip
echo 'hari ini hari jum\'at';

echo  "<br>";
$teman = "andi";
if($teman == "andi"){
    echo "dia adalah teman saya";
}else{
    echo "dia bukan teman saya";
}

echo "<br>";
echo "<br>";

$teman1 = "budi";
if($teman1 == "budi"){
    echo "budi adalah teman saya";
}elseif($teman1 == "andi"){
    echo "andi adlaah teman saya";
}else{
    echo "saya tidak punya teman";
}



// tiga variable berbeda
$Belajar = "";
$BELAJAR = "";
$belajar = "";
echo "<br>";
// boleh menggunakna underscore

$nama_barang = "Buku PHP";
$namaPembeli = "Petani Kode"; // <-- menggunakan camelCase

echo "<br>";
// mengambil nilai variable
// membuat variabel baru
$nama_barang = "Minyak Goreng";
$harga = 15000;

// menampilkan isi variabel
echo "Ibu membeli $nama_barang seharga Rp $harga";

echo "<br>";

$stok_1 = "ayam goreng";
$harga_1 = "15."."000";

// print("Sandi membeli $stok_1, dengan harga $harga_1")



echo "jono Memberli $stok_1, Dengan Harga $harga_1";

echo "<br>";


echo "<br>";

//database data diri
$nama_lengkap = "andika mahesa";
$jenis_kelamin = "L";
$umur = "26";
$berat = "55 Kg";
$tinggi = "167 cm";
$menikah = false;

// cetak data
echo "<h1>Biodata Diri</h1>";
echo "Nama: $nama_lengkap<br>";
echo "Jenis Kelamin: $jenis_kelamin<br>";
echo "Umur: $umur<br>";
echo "Berat Badan: $berat<br>";
echo "Tinggi Badan: $tinggi<br>";
echo "Menikah: $menikah<br>";


echo "<br>";

//aray lear
// arai tu ada 2 format
// $buah = array();
// $hobi = [];
// contoh
$minuman = array("Kopi","Teh","susu","jus jeruk");
$makanan = ["nasi goyeng","mie telor","ayam kecap"];

// result
echo "andika mau pesen ". $makanan[0] . " dengan minum " . $minuman[0];

echo "<br>";

$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";

var_dump($barang);


echo "<br>";
echo "<br>";
//kita perbesar aaray nya
$x_kunci = [
    "nama" => "Andika",
    "umur" => "26 Tahun",
    "Asal Sekolah" => "Smk BPK Penabur",
];

var_dump($x_kunci);
?>