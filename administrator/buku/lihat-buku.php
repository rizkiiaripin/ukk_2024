<div class="card mb-4">
    <?php
        //error_reporting(0);
        require_once '../config/koneksi2.php';
        require_once '../config/sql.php';
        $id=$_GET['id'];
        $dt=new Buku();
        foreach($dt->tampilBukuSingle($id) as $tampil){
        ?>
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Rincian Buku
    </div>
    <div class="card-body">
        <table>
            <tr>
                    <td><img src="assets/img/<?php 
                    $photo=$tampil['foto_sampul'];
                    if ($photo=="")
                    { 
                        echo "no_photo.jpg";
                    }
                    else {
                        echo $tampil['foto_sampul']; 
                    }
                     ?>" width="200px" height="250px"></td>
                    <td>ID : <?php echo $tampil['id_buku'];?>
                    <br/>Judul : <a href="index.php?menu=buku&act=show&id=<?= $tampil['id_buku'];?>">
                    <?php echo $tampil['judul'];?></a>
                    <br/>Kategori : <?php echo $tampil['id_kategori'];?>
                    <br/>Penerbit : <?php echo $tampil['id_penerbit'];?>
                    <br/>Stok : <?php echo $tampil['jumlah'];?>
                    <br/>Lokasi : <?php echo $tampil['lokasi'];?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <b> Deskripsi :</b><br/>
                    <?php echo $tampil['deskripsi'];?>
                    </a>
                </td>      
            </tr>
        </table>
    </div>
    <?php
        }
        ?>
    <br/><br/>
    <div class="card-footer">
  	<a href="../administrator/index.php?menu=buku"> <button class="btn btn-info">Kembali ke Daftar Buku</button></a>
    </div>
</div>