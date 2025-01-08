<?php 
 require_once '../config/koneksi2.php';
 require_once '../config/sql.php';
 $id = $_GET['id'];
 $data=new Anggota();
 $data->hapusAnggota($id);
 echo"<meta http-equiv='refresh' content='0;url=index.php?menu=anggota'>";

?>