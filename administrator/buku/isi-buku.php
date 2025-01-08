<div class="container-fluid px-4">
    <h1 class="mt-4">Buku</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?menu=home">Dasbor</a></li>
        <li class="breadcrumb-item active">Buku</li>
    </ol>
    <?php
    $act = $_GET['act'];
    switch ($act) {
        case 'input':
            include('input-buku.php');
            break;
            case 'edit':
            include('edit-buku.php');
                break;
            case 'show':
            include('lihat-buku.php');
            break;
            case 'hapus':
            include('hapus_buku.php');
            break;
        default:
            include('list-buku.php');
            break;
    }
    
    
    ?>
</div>