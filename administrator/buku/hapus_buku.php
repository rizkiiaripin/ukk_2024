<?php 
 require_once '../config/koneksi2.php';
 require_once '../config/sql.php';
 $id = $_GET['id'];
 $data=new Buku();
 $data->hapusBuku($id);
 echo"<meta http-equiv='refresh' content='0;url=index.php?menu=buku'>";

?>