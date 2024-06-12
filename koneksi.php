<?php

    $koneksi = mysqli_connect('localhost', 'root' , '', 'db_remed_desta');

    if(!$koneksi) {
        echo "Koneksi Gagal";
    }

?>