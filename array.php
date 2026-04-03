<?php
$mahasiswa = [
    "Priesty" => "Purwokerto",
    "Dinda" => "Jakarta",
    "Rizky" => "Surabaya",
    "Alya" => "Yogyakarta"
];

echo $mahasiswa["Priesty"] . "<br>";
echo $mahasiswa["Alya"] . "<br>";

$dataNim = [];
$dataNim["Priesty"] = "2311102175";
$dataNim["Dinda"] = "2311102271";
$dataNim["Rizky"] = "2311102199";

echo $dataNim["Priesty"];
?>