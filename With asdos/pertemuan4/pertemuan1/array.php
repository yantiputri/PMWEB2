<?php 
$temanSaya = ["bella", "dila", "elnaya"];
print_r ($temanSaya);//untuk menampilkan seluruh nilai array
echo $temanSaya[0];
echo "<ol>";
foreach ($temanSaya as $key => $value) {
    echo "<li>$key. $value</li>";
}
echo "</ol>";
$temanSaya[2] = "siti";
unset($temanSaya[1]);
print_r($temanSaya);


echo "<br><br><br>";
$buah = ["a" => "apel", "m" => "mangga"];
print_r($buah);
?>