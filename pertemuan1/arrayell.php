<?php 
$ar_buah = ["a" => "anggur", "b" => "banana", "c" => "ceri"];
echo '<ol>';
foreach($ar_buah as $k => $v) {
    echo '<li>' .$k. ' - ' .$v. '</li>';
}
echo '</ol>';
sort($ar_buah);
echo '<hr/>'



$tims = ["yanti", "elnaya"];
array_pop($tims);
foreach($tims as $person){
    echo $person. '<br/>';
}

$tims = ["yanti", "elnaya"];
array_push
?>