
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data Peminjaman
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID Pinjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Nama Anggota</th>
                    <th>Petugas</th>
                    <th>Status Pinjam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID Pinjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Nama Anggota</th>
                    <th>Petugas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
            <?php
				//error_reporting(0);
				require_once '../config/init.php';
				
				$dt=new Peminjaman();
				foreach($dt->tampilPeminjaman() as $tampil){
				?>
                <tr>
                    
                    <td><?php echo $tampil['id_pinjam'];?></td>
                    <td><?php echo $tampil['tgl_pinjam'];?></td>
                    <td><?php echo $tampil['tgl_kembali'];?></td>
                    <td><?php echo $tampil['nm_anggota'];?></td>
                    <td><?php echo $tampil['nm_petugas'];?></td>
                    <td><?php echo $tampil['status_peminjaman'];?></td>
                    <td>
                        <a href="index.php?menu=peminjaman&act=show&status=<?php echo $tampil['status_peminjaman'];?>&id=<?php echo $tampil['id_pinjam'];?>"><button type="button" class="btn btn-secondary"> Lihat </button></a>
                    </td>
                </tr>
                <?php
					}
				?>
            </tbody>
        </table>
    </div>
</div>