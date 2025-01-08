<div class="card mb-4">
    <div class="card body">
        <a href="index.php?menu=petugas&act=input">
        <button class="btn btn-outline-info">Tambah data</button>
        </a>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Anggota 
    </div>
    <div class="card-body" >
        <table  id="datatablesSimple">
            <thead >
                <tr>
                <th>ID</th>    
                <th>Username</th>
                <th>Status</th>
                <th>Password</th>
                <th>Nama </th>
                <th>Jenis Kelamin </th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tfoot id="datatablesSimple">
                <tr>
                <th>ID</th>    
                <th>Username</th>
                <th>Status</th>
                <th>Password</th>
                <th>Nama </th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                require_once '../config/koneksi2.php';
                require_once '../config/sql.php';

                $data =new Petugas();
                foreach ($data->tampilpetugas() as $tampil) {
                ?>
                <tr>
                   
                    <td><?php echo $tampil['id_petugas'];?></td>
                    <td><a href="index.php?id_buku"><?php echo $tampil['username'];?></a></td>
                    <td><?php echo $tampil['status'];?></td>
                    <td><?php echo $tampil['password'];?></td>
                    <td><?php echo $tampil['nm_petugas'];?></td>
                    <td><?php echo $tampil['jk'];?></td>
                    <td><?php echo $tampil['alamat_petugas'];?></td>
                    <td><?php echo $tampil['telp_petugas'];?></td>
                    <td>
                                
                        <a href="index.php?menu=petugas&act=edit&id=<?= $tampil['id_petugas'];?>"><button type="button" class="btn btn-outline-secondary">Edit</button></a>
                        <a href="index.php?menu=petugas&act=hapus&id=<?= $tampil['id_petugas'];?>"><button type="button" class="btn btn-outline-danger" onclick="return confirm('apakah anda yakin menghapus data ini ');">delete</button></a>
                   </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>