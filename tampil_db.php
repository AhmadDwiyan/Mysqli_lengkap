<?php
include 'koneksi.php';

$q = "SELECT * FROM user ";

$tampil = mysqli_query($konek,$q);

if(!$tampil){

    echo " Koneksi Gagal";

} else {

    foreach($tampil as $data){
    $id = $data['id'];
    $nama = $data['nama'];
    $status = $data['status'];
    $umur = $data['umur'];
    $kerja = $data['tahun_kerja'];
    $email = $data['email'];
    $lokasi = $data['lokasi'];


    }

}


?>