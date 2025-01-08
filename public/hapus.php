<?php 
session_start();

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('location:../cart.php');
    exit;
}
if (!isset($_SESSION['keranjang'])) {
    header('location:../cart.php');
    exit;
}
if (isset($_SESSION['keranjang'][$_GET['id']])) {
    unset($_SESSION['keranjang'][$_GET['id']]);

}
unset($_SESSION['keranjang'][$_GET['id']]);
header('location:../cart.php');
    exit;