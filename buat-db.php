<?php
include "koneksi.php";

$sql = "CREATE DATABASE entah";


if(mysqli_query($konek,$sql)){

    echo "Database Berhasil Dibuat";
} else {
    Echo"Gagal !!!" . mysqli_error($konek);
}

?>