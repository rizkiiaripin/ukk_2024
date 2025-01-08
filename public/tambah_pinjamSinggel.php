<?php
session_start();
require_once '../config/init.php';



if (isset($_SESSION['login'])) {
 
if (isset($_POST['simpan'])) {
    
$no = $_POST['txtiddetail'];

$idpinjam = $_POST['txtid'];
$jumlah = '1';


$tgl_pinjam = date('Y-m-d');
$tgl_kembali = date('Y-m-d',strtotime($tgl_pinjam.'+ 6 days')); 
$status = 'Proses';
$status2 = 'Diterima';
if (!isset($_SESSION['id_anggota'])) {
    header('location:login.php');
}else {
    $idanggota = $_SESSION['id_anggota'] ;

}
$idpetugas = '-';


$alasan = '-';
$data = new Peminjaman;
$data->inputPeminjaman($idpinjam,$tgl_pinjam,$tgl_kembali,$status,$idanggota,$idpetugas);
$id_buku = $_POST['id'];
$data->inputDetailPeminjaman($no,$idpinjam,$status2,$id_buku,$jumlah,$alasan);




header('location:../shop.php');
    exit;   
}

} else{
        header('location:login.php');
    }

    
