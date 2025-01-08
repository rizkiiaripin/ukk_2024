<div class="card mb-4">
    <div class="card body">
        <a href="index.php?menu=anggota&act=input">
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
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon Anggota</th>
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
                <th>Telepon Anggota</th>
                <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                require_once '../config/koneksi2.php';
                require_once '../config/sql.php';

                $data =new Anggota();
                foreach ($data->tampilanggota() as $tampil) {
                ?>
                <tr>
                   
                    <td><?php echo $tampil['id_anggota'];?></td>
                    <td><a href="index.php?id_buku"><?php echo $tampil['username'];?></a></td>
                    <td><?php echo $tampil['status'];?></td>
                    <td><?php echo $tampil['password'];?></td>
                    <td><?php echo $tampil['nm_anggota'];?></td>
                    <td><?php echo $tampil['jk'];?></td>
                    <td><?php echo $tampil['alamat_anggota'];?></td>
                    <td><?php echo $tampil['telp_anggota'];?></td>
                    <td>
                                
                    <a href="index.php?menu=anggota&act=edit&id=<?= $tampil['id_anggota'];?>"><button type="button" class="btn btn-outline-secondary">Edit</button></a>
                       <a href="index.php?menu=anggota&act=hapus&id=<?= $tampil['id_anggota']; ?>"onclick="return confirm('apakah anda yakin menghapus data ini');" ><button type="button" class="btn btn-outline-danger">delete</button></a> 
                   </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>