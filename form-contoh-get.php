<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh get</title>
</head>
<body>
    <?php
        if( isset($_GET['id']) && isset($_GET['nama']) ){
            $id = $_GET['id'];
            $nama = $_GET['nama'];
            echo "Hallo $nama, id anda adalah, $id";
        }else{
            echo "Hallo anda tidak terdaftar";
        } 
    ?>
</body>
</html>