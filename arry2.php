<?php
$hewan = [
    "Burung",
    "Kucing",
    "Ikan"
];

unset($hewan[1]);

echo isset($hewan[0]) ? $hewan[0] . "<br>" : "Tidak ada data<br>";
echo isset($hewan[1]) ? $hewan[1] . "<br>" : "Tidak ada data<br>";  // Ini akan mencetak 'Tidak ada data'
echo isset($hewan[2]) ? $hewan[2] . "<br>" : "Tidak ada data<br>";
echo "<hr>";

echo "<pre>";
print_r($hewan);  // Menampilkan array yang tersisa
echo "</pre>";



//menambahakan isi array
// membuat array 
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada indeks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada idneks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach ($hobi as $hobiku) {
    echo $hobiku."<br>";
}



?>
