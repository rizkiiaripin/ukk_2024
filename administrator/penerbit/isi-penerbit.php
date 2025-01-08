
<div class="container-fluid px-4">
    <h1 class="mt-4">Penerbit</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php?menu=home">Dasbor</a></li>
        <li class="breadcrumb-item active">Penerbit</li>
    </ol>
    <?php
    $act = $_GET['act'];
    switch ($act) {
        case 'input':
            include('input-penerbit.php');
            break;
            case 'edit':
                include('edit-penerbit.php');
                break;
                case 'hapus':
                    include('hapus-penerbit.php');
                    break;
        default:
            include('list-penerbit.php');
            break;
    }
    
    
    ?>
</div>