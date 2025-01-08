<?php 
session_start();
require_once '../config/koneksi2.php';
require_once '../config/sql.php';
 
$_user = $_POST['username'];
$_pass = $_POST['password'];

$dt=new Petugas();
foreach($dt->cekLogin($_user,$_pass) as $tampil){
    $jumlah_data=$tampil['jumlah'];
}

if ($jumlah_data<1)
{
		header("location:login.php?info=gagal");
}
else
{
$dt=new Petugas();
foreach($dt->tampilPetugasLogin($_user,$_pass) as $tampil){
		$_SESSION['id_petugas']=$tampil['id_petugas'];
		$_SESSION['nm_petugas']=$tampil['nm_petugas'];
		$_SESSION['username']=$tampil['username'];
		$_SESSION['password']=$tampil['password'];
		$_SESSION['status']=$tampil['status'];
		$_SESSION['hai']="login";
		header("location:index.php?menu=home");
}
}