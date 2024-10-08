<?php
// membuat array 
$barang = ["Buku Tulis","Penghapus","Spidol"];

// menampilkan isi array dengan perulangan for
for( $i = 0; $i < count( $barang ); $i++ ) {
    echo $barang[$i]."<br>";
}

echo "<br>";

$text = array("Kalimat","kata-kata","Seledri","gagangpanci");

for( $z = 0; $z < count ( value: $text); $z++) {
    echo $text[$z]."<br>";
}


?>