<div class="container-fluid px-4">
    <h1 class="mt-4">kategori</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?menu=home">Dasbor</a></li>
        <li class="breadcrumb-item active">kategori</li>
    </ol>
    <?php
    $act = $_GET['act'];
    switch ($act) {
        case 'input':
            include('input-kategori.php');
            break;
            case 'edit':
                include('edit-kategori.php');
                break;
                case 'hapus':
                    include('hapus-kategori.php');
                    break;
        default:
            include('list-kategori.php');
            break;
    }
    
    
    ?>
</div>