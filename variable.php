<?php
    $nama = "Yogi"; // string
    $umur = 20;     // int
    $tinggi = 170.5;// float

    // ngecheck & print tipe data
    // var_dump($nama);
    // var_dump($umur);
    // var_dump($tinggi);

    //contoh strict penjumlahan beda tipe data, akan error jika pengaturan di php = strict
    $contohStrict = $nama + $umur; 

    // Output variable, perbedaan " dan '
    echo "Nama Saya : $nama, umur saya $umur dan tinggi saya $tinggi";
    echo "<br>";
    echo 'Nama Saya : '.$nama.', umur saya '.$umur.' dan tinggi saya '.$tinggi;


    //==============================================================================
    // array
    //==============================================================================
    $array = [
        'pisang', 'rambutan', 'durian' 
    ];
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    // array Associative adalah array yg key nya kita definisikan
    $arAsociative =[
        'budi' => 25,
        'andi' => 20,
        'toto' => 23
    ];
    echo "<pre>";
    var_dump($arAsociative);
    echo "</pre>";

    //cara pemanggilan di sebuah array, panggil pake key nya
    echo $array[0]; echo "<br>";
    echo $array[1]; echo "<br>";
    echo $array[2]; echo "<br>";

    //cara pemanggilan di sebuah array assosiatif, panggil pake key nya
    echo $arAsociative['budi']; echo "<br>";
    echo $arAsociative['andi']; echo "<br>";
    echo $arAsociative['toto']; echo "<br>";

    // boolean
    $bola = true;
    $bolb = false;

    // Perbedaan NULL dan empty
    $dataNull = null;
    $dataEmpty = '';

    echo "<pre>";
    var_dump($dataNull);
    var_dump($dataEmpty);
    echo "</pre>";

    // Konstanta, mirip variable, tp datanya tidak bisa berubah 
    define('PHI', 3.14);
    $r = 5;
    $pi = 3.14;
    echo PHI * $r * $r; echo "<br>";
    echo $pi * $r * $r; echo "<br>";
    
    
    $pi = 'string';
    echo $pi * $r * $r; echo "<br>";


    //tanpa ternary operator
    $ternary = true;
    if($ternary){
        echo "ternary true";
    }else{
        echo "ternary false";
    }
    echo "<br>";
    //dengan ternary operator
    echo $ternary ? "ternary true" : "ternary false";










    


    ?>