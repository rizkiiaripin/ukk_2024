<?php
session_start();
unset($_SESSION['id_anggota']);
unset($_SESSION['nm_anggota']);
unset($_SESSION['user']);
unset($_SESSION['password']);
unset($_SESSION['telepon']);
unset($_SESSION['alamat']);
unset($_SESSION['status']);
unset($_SESSION['login']);
unset($_SESSION['keranjang']);
header("location:../index.php");