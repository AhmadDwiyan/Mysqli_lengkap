<?php
/* BUAT TABEL */

include 'koneksi.php';

$sql = "CREATE TABLE user( id int PRIMARY KEY ,
nama varchar(225),status varchar(225),umur varchar(225),lokasi varchar(225),tahun_kerja varchar(225),
email varchar(225)

)";

$buat_tabel = mysqli_query($konek,$sql);
if(!$buat_tabel){
    echo "Gagal !!!".mysqli_error($buat_tabel);
} else {

    echo "Berhasil !!!";
}


?>