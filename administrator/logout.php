<?php
session_start();
unset($_SESSION['id_petugas']);
unset($_SESSION['nm_petugas']);
unset($_SESSION['id_petugas']);
unset($_SESSION['username']);
unset($_SESSION['password']);

unset($_SESSION['hai']);
header('location:index.php');