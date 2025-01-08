<?php include'navbar.php';?>
<div class="card mb-4">
    <?php
        //error_reporting(0);
        require_once '../UKK2024_perpus_MRizkiAripinXIIRPL1/config/init.php';
        $id=$_GET['id'];
        $dt=new Buku();
        foreach($dt->tampilBukuSingle($id) as $tampil){
        ?>
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Rincian Buku
    </div>
    <div class="card-body">
    <form method="post" action="public/tambah_pinjamSinggel.php" >
        <div class=" grid-3">
            <div class="row">
                <div class=" col-3"><img src="administrator/assets/img/<?php 
                    $photo=$tampil['foto_sampul'];
                    if ($photo==" ")
                    { 
                        echo "no_photo.jpg";
                    }
                    else {
                        echo $tampil['foto_sampul']; 
                    }
                     ?>" width="250px" ></img>
                     <form action="public/tambah_keranjang.php?id=<?php echo $tampil['id_buku'];?>" method="post">
								<button type="submit" class="btn btn-primary mt-5">
								Add Cart
							</button>
                    </form>
                    <?php
                    require_once'config/init.php';
                    $data = new Peminjaman;
                    ?>
                    <input type="text" name="id" value="<?php echo $tampil['id_buku'];?>" hidden="hidden">
                    <input type="text" name="txtiddetail" value="<?php echo $data->idOtomatisDetail()?>" hidden="hidden" > 
                    <input type="text" name="txtid" value="<?php echo $data->idOtomatis()?>" hidden="hidden">
                    <button class="btn btn-primary mt-5" type="submit" name="simpan" onclick="return confirm('apakah ingin meminjam buku <?php echo $tampil['judul'];?> ?')" <?php if ($tampil['jumlah'] <= 0) {
                        ?>
                        disabled = 'disabled'<?php } ?>>pinjam</button>
                    
                </div>
                <div class="col"> ID : <?php echo $tampil['id_buku'];?>
                    <br/>Judul : <a href="index.php?menu=buku&act=show&id=<?= $tampil['id_buku'];?>">
                    <?php echo $tampil['judul'];?></a>
                    <br/>Kategori : <?php echo $tampil['nm_kategori'];?>
                    <br/>Penerbit : <?php echo $tampil['nm_penerbit'];?>
                    <br/>Stok : <?php echo $tampil['jumlah'];?>
                    <br/>Lokasi : <?php echo $tampil['lokasi'];?>
                 <br/>
            <br/><b> Deskripsi :</b>
            <?php echo $tampil['deskripsi'];?></div>
            </div>
            
        </div>
    </div>
    <?php
        }
        ?>
    </form>
</div>
<?php include'footer.php';?>
<table>
            <tr class=" bgblack">
                    <td class=" bg"><img src="administrator/assets/img/<?php 
                    $photo=$tampil['foto_sampul'];
                    if ($photo==" ")
                    { 
                        echo "no_photo.jpg";
                    }
                    else {
                        echo $tampil['foto_sampul']; 
                    }
                     ?>" width="250px" ></td>
                   
                <td ></td>    
                
            </tr>
            <tr><td colspan="2">
                  
                    </a>
                </td>  
            </tr>
        </table>