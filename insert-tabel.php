<?php
include 'koneksi.php';

$insert = "INSERT INTO user(nama,status,umur,lokasi,tahun_kerja,email) VALUES('Ahmad Dwiyan Anugrah Putra',
   'Web Developer','16','Malang Jawatimur','5','dwiyan@email.com')";

$query = mysqli_query($konek,$insert);

if(!$query){

    echo "Gagal Insert Data".mysqli_error($konek);
} else {
    echo "Berhasil !!!";
}
?>