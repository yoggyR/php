<?php
    // validasi jenis http requet
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //form validation
        if(!empty($_POST['nama']) && !empty($_POST['email'] && isset($_POST['nama']) && isset($_POST['email'])) ){
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            echo "Halo $nama, email anda $email sudah kami daftarkan, terima kasih";
        }else{
            echo "<script>alert('nama dan email harus diisi !');history.back(-1);</script>";
        }
    }else{
        echo "<script>alert('request method selain POST tidak diperbolehkan');history.back(-1);</script>";
    }
?>