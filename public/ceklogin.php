<?php 
session_start();
require_once '../config/koneksi2.php';
require_once '../config/sql.php';
 
$_user = $_POST['username'];
$_pass = $_POST['password'];

$dt=new Anggota();
foreach($dt->cekLogin($_user,$_pass) as $tampil){
    $jumlah_data=$tampil['jumlah'];
}

if ($jumlah_data<1)
{
    echo "<script>
        alert('silahkan Login')
        window.location.href = 'login.php';
                
        </script>";
	
}
else
{
$dt=new Anggota();
foreach($dt->tampilAnggotaLogin($_user,$_pass) as $tampil){
		$_SESSION['id_anggota']=$tampil['id_anggota'];
		$_SESSION['nm_anggota']=$tampil['nm_anggota'];
		$_SESSION['user']=$tampil['username'];
		$_SESSION['password']=$tampil['password'];
		$_SESSION['telepon']=$tampil['telp_anggota'];
		$_SESSION['alamat']=$tampil['alamat_anggota'];
		$_SESSION['status']=$tampil['status'];
		$_SESSION['login']="login";
		header("location:../index.php");
}
}