<?php
session_start();
require_once '../config/init.php';




 
if (isset($_POST['simpan'])) {
$idpinjam = $_POST['txtid'];
$jumlah = $_POST['qty'];


$tgl_pinjam = date('Y-m-d');
$tgl_kembali = date('Y-m-d',strtotime($tgl_pinjam.'+ 6 days')); 
$status = 'Proses';
$status2 = 'Diterima';
$idanggota = $_SESSION['id_anggota'] ;
$idpetugas = '-';
$alasan = '-';
$data = new Peminjaman;
$data->inputPeminjaman($idpinjam,$tgl_pinjam,$tgl_kembali,$status,$idanggota,$idpetugas);
foreach($_SESSION['keranjang'] as $key => $value){
    
    $no = $_POST['txtiddetail'];
    
    $id_buku = $key;
    $data->inputDetailPeminjaman($no,$idpinjam,$status2,$id_buku,$jumlah,$alasan);
}
$_SESSION['keranjang'] =[];



header('location:../cart.php');
    exit;}else{
        header('location:../shop.php');
    }

    
