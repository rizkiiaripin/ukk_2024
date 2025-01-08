<div class="card mb-4">
    <div class="card body">
        <a href="index.php?menu=kategori&act=input">
        <button class="btn btn-outline-info">Tambah data</button>
        </a>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data kategori 
    </div>
    <div class="card-body" >
        <table  id="datatablesSimple">
            <thead >
                <tr>
                <th>ID</th>    
                <th>Nama</th>
               
                <th>Aksi</th>
                </tr>
            </thead>
            <tfoot id="datatablesSimple">
                <tr>
                <th>ID</th>    
                <th>Nama </th>
                <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                require_once '../config/koneksi2.php';
                require_once '../config/sql.php';

                $data =new Kategori();
                foreach ($data->tampilKategori() as $tampil) {
                ?>
                <tr>
                   
                    <td><?php echo $tampil['id_kategori'];?></td>
                    <td><a href="index.php?id_buku"><?php echo $tampil['nm_kategori'];?></a></td>
                    <td>
                                
                    <a href="index.php?menu=kategori&act=edit&id=<?= $tampil['id_kategori'];?>"><button type="button" class="btn btn-outline-secondary">Edit</button></a>
                       <a href="index.php?menu=kategori&act=hapus&id=<?= $tampil['id_kategori']; ?>"onclick="return confirm('apakah anda yakin menghapus data ini');" ><button type="button" class="btn btn-outline-danger">delete</button></a> 
                   </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>