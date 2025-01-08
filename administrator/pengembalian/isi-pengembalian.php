<div class="container-fluid px-4">
    <h1 class="mt-4">Transaksi Pengembalian</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dasbor</a></li>
        <li class="breadcrumb-item active">Transaksi Pengembalian</li>
    </ol>
    <?php
    error_reporting(0);
    $act=$_GET["act"];
    if ($act=="show")
    {
        include("lihat-pengembalian.php");
    }
    else
    {
        include("list-pengembalian.php");
    }
    ?>
</div>