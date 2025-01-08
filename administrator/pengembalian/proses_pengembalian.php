<?php
require_once '../../config/koneksi2.php';
require_once '../../config/sql.php';

$jumData = $_POST['n'];
$id = $_POST['id_pinjam'];
$idang = $_POST['txtidanggota'];
$idptg = $_POST['txtidpetugas'];
$denda = $_POST['txtdenda'];
$stskem='Selesai';
$tglkbl = date("Y-m-d");
 
for ($i=1; $i<=$jumData; $i++)
{
   $idbuku = $_POST['idbuku'.$i];
   $jml = $_POST['jumlah'.$i];
   $jmlkembali = $_POST['jmlkembali'.$i];
   $ket  = $_POST['keterangan'.$i];
   $denbk  = $_POST['dendabuku'.$i];
   
   $dt=new Pengembalian();
   $dt->inputPengembalianDetail($id,$idbuku,$jml,$jmlkembali,$ket,$denbk);
   
}

$dt=new Pengembalian();
$dt->inputPengembalian($id,$tglkbl,$denda,$idang,$idptg,$stskem);

$status="Dikembalikan";

$dt=new Peminjaman();
$dt->editStatusPinjam($id,$status,$idptg);

echo '<script type ="text/JavaScript"> alert("Pengembalian Selesai Diproses") </script>';
?>
<meta http-equiv="refresh" content="0; url=../index.php?menu=pengembalian">
