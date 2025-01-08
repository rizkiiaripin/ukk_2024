<div class="container-fluid px-4">
    <h1 class="mt-4">Petugas</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?menu=home">Dasbor</a></li>
        <li class="breadcrumb-item active">Petugas</li>
    </ol>
    <?php
    $act = $_GET['act'];
    switch ($act) {
        case 'input':
            include('input-petugas.php');
            break;
            case 'edit':
                include('edit-petugas.php');
                break;
                case 'hapus':
                    include('hapus-petugas.php');
                    break;
        default:
            include('list-petugas.php');
            break;
    }
    
    
    ?>
</div>