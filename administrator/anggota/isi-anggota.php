<div class="container-fluid px-4">
    <h1 class="mt-4">Anggota</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?menu=home">Dasbor</a></li>
        <li class="breadcrumb-item active">Anggota</li>
    </ol>
    <?php
    $act = $_GET['act'];
    switch ($act) {
        case 'input':
            include('input-anggota.php');
            break;
            case 'edit':
                include('edit-anggota.php');
                break;
                case 'hapus':
                    include('hapus-anggota.php');
                    break;
        default:
            include('list-anggota.php');
            break;
    }
    
    
    ?>
</div>