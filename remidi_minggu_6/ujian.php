<?php

$merk = [
    ["Makanan", "Bakso", 200000],
    ["Makanan", "Lontong", 100000],
    ["Makanan", "Ketoprak", 200000],
    ["Makanan", "Martabak", 250000],
    ["Minuman", "Teh", 50000],
    ["Minuman", "Es Teh", 100000],
    ["Snack", "Bakwan", 200000],
    ["Snack", "Pisang Goreng", 150000]
];

// var_dump($merk);
// foreach($merk as $key){
//     // echo $key[0],$key[1],$key[2].PHP_EOL;
    
// }
$data=[];
foreach($merk as $value){
    $data[]=$value[0];
}
// var_dump(array_unique($data));
$tampil=array_unique($data);

foreach($tampil as $key){
    echo $key.PHP_EOL;
}

