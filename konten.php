<?php 
if (isset($_GET['link'])) {
    $tampilbuku =$_GET['link'];
    switch ($tampilbuku) {
        case 'kat':
            include 'shop2.php';
            break;
        
            case 'all':
                include 'shop.php';
                break;
                 case 'tambahkeranjang':
                    include '../public/tambah_keranjang.php';
                    break;
            
        default:
        include 'public/tampil_buku_random.php';
            break;
    }
}



?>