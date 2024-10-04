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

?>