<?php
// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];
// menampilkan isi aray dengan perulangan foreach
foreach($barang as $isi){
    echo $isi."<br>";
}

echo "<hr>";

//menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($barang)){
    echo $barang[$i]."<br>";
    $i++;
}

echo "<hr>";
// pt 2
$text = array("Balsem","micin","terigu");

foreach($text as $nice){
    echo $nice."<br>";
}

echo "<hr>";

$x = 0;
while($x < count($text)){
    echo $text[$x]."<br>"; 
    $x++;
}

?>