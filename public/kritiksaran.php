<?php
session_start();

require_once'../config/init.php';


if (isset($_SESSION['login'])) {
    if (isset($_POST['simpan'])) {
        $nama = $_POST['txtnama'];
        $pesan = $_POST['txtpesan'];

        $data = new Kritik;
        $data->inputPesan($nama,$pesan);
        header('location:../index.php');
    }
}else{
    header('location:login.php');
}

?>



