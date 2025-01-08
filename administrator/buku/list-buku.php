<div class="card mb-4">
    <div class="card body">
        <a href="index.php?menu=buku&act=input">
        <button class="btn btn-outline-info">Tambah data</button>
        </a>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Buku 
    </div>
    <div class="card-body" >
        <table  id="datatablesSimple">
            <thead >
                <tr>
                <th>Gambar</th>
                <th>ID</th>    
                <th>Judul</th>
                <th>Kategori</th>
                <th>penerbit</th>
                <th>Jumlah</th>
                <th>Lokasi</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tfoot id="datatablesSimple">
                <tr>
                <th>Gambar</th>
                <th>ID</th>    
                <th>Judul</th>
                <th>Kategori</th>
                <th>penerbit</th>
                <th>Jumlah</th>
                <th>Lokasi</th>
                <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                require_once '../config/koneksi2.php';
                require_once '../config/sql.php';

                $data =new Buku();
                foreach ($data->tampilbuku() as $tampil) {
                ?>
                <tr>
                    <td><img class="img-thumbnail" src="assets/img/<?php
                    $photo =  $tampil['foto_sampul'];       
                    if ($photo =="") {
                     echo "kosong.jpg";
                    }else{
                        echo $tampil['foto_sampul'];   
                    }
                                     
                    ?>" alt="" width="90px" height="90px"></td>
                    <td><?php echo $tampil['id_buku'];?></td>
                    <td><a href="index.php?menu=buku&act=show&id=<?php echo $tampil['id_buku'];?>"><?php echo $tampil['judul'];?></a></td>
                    <td><?php echo $tampil['id_kategori'];?></td>
                    <td><?php echo $tampil['id_penerbit'];?></td>
                    <td><?php echo $tampil['jumlah'];?></td>
                    <td><?php echo $tampil['lokasi'];?></td>
                    <td>

                    <a href="index.php?menu=buku&act=edit&id=<?= $tampil['id_buku'];?>"><button type="button" class="btn btn-outline-secondary">Edit</button></a>
                    <a href="index.php?menu=buku&act=hapus&id=<?= $tampil['id_buku'];?>" onclick="return confirm('apakah anda yakin menghapus buku <?= $tampil['judul'];?>');"><button type="button" class="btn btn-outline-danger">delete</button></a>
                   </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>