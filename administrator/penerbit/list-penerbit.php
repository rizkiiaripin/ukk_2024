<div class="card mb-4">
    <div class="card body">
        <a href="index.php?menu=penerbit&act=input">
        <button class="btn btn-outline-info">Tambah data</button>
        </a>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Penerbit
    </div>
    <div class="card-body" >
        <table  id="datatablesSimple">
            <thead >
                <tr>
                <th>ID</th>    
                <th>Nama </th>
                <th>Alamat</th>
                <th>Telepon Penerbit</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tfoot id="datatablesSimple">
                <tr>
                <th>ID</th>    
                <th>Nama </th>
                <th>Alamat</th>
                <th>Telepon Penerbit</th>
                <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                require_once '../config/koneksi2.php';
                require_once '../config/sql.php';

                $data =new Penerbit();
                foreach ($data->tampilpenerbit() as $tampil) {
                ?>
                <tr>
                   
                    <td><?php echo $tampil['id_penerbit'];?></td>
                    <td><a href="index.php?id_penerbit"><?php echo $tampil['nm_penerbit'];?></a></td>
                    <td><?php echo $tampil['alamat_penerbit'];?></td>
                    <td><?php echo $tampil['telp_penerbit'];?></td>
                    
                    <td>
                                
                    <a href="index.php?menu=penerbit&act=edit&id=<?= $tampil['id_penerbit'];?>"><button type="button" class="btn btn-outline-secondary">Edit</button></a>
                       <a href="index.php?menu=penerbit&act=hapus&id=<?= $tampil['id_penerbit']; ?>"><button type="button" class="btn btn-outline-danger " onclick="return confirm('apakah anda yakin menghapus data ini');">delete</button></a> 
                   </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>