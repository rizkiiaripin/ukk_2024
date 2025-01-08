<?php
require_once '../../config/koneksi2.php';
require_once '../../config/sql.php';
$idptg=$_POST["id_petugas"];
$txtprs=$_POST['txtproses'];
$jumData = $_POST['n'];
$id = $_POST['id_pinjam'];
 
for ($i=1; $i<=$jumData; $i++)
{
   $jml = $_POST['jumlah'.$i];
   $idbuku = $_POST['id_buku'.$i];
   $status  = $_POST['status'.$i];
   $alasan  = $_POST['alasan'.$i];
   
   $dt=new Peminjaman();
   $dt->editPeminjaman($id,$idbuku,$jml,$status,$alasan);
   
}

if ($txtprs=="Selesai"){
$status="Dipinjam";
}
else {
$status="Batal";
}
$dt=new Peminjaman();
$dt->editStatusPinjam($id,$status,$idptg);

echo '<script type ="text/JavaScript"> alert("Peminjaman Selesai Diproses") </script>';
?>
<meta http-equiv="refresh" content="0; url=../index.php?menu=peminjaman">
