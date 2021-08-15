<?php
    $arrBuah = [
        'pisang', 
        'rambutan', 
        'durian', 
        'mangga'
    ];
    // contoh for, mirip2 di c / c++
    for($i=0; $i<10; $i++){
        echo "$i <br>";
    }

    //contoh penggunaan for di array buah
    echo "<pre>";var_dump(count($arrBuah));echo "</pre>";
    for($i=0; $i<count($arrBuah); $i++){
        echo $arrBuah[$i] . "<br>";
    }

     //contoh penggunaan for di array asso
    $arrAsso = [
        'budi' => 'mancing',
        'andi' => 'bersepeda',
        'tono' => 'main game',
        'toni' => 'makan',
    ];

    foreach($arrAsso as $key => $val){
        echo $key ." ". $val . "<br>";
    }

    foreach($arrBuah as $key => $val){
        echo $key ." ". $val . "<br>";
    }

?>