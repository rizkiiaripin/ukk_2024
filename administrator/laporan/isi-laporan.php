<div class="container-fluid px-4">
    <h1 class="mt-4">Laporan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.php">Dasbor</a></li>
        <li class="breadcrumb-item active">Laporan</li>
    </ol>
    <div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Filter Data Berdasarkan Tanggal
    </div>
    <div class="card-body">
        <form action="" method="post">

			<div class=" mb-3">
              <label>Tanggal Awal : </label>
			  <input type="date" name="txttglawal" placeholder="Tanggal Awal" required="required">
			</div>

            <div class="mb-3">
              <label>Tanggal Akhir : </label>
			  <input type="date" name="txttglakhir" placeholder="Tanggal Awal" required="required">
			</div>
            <button type="submit" class="btn btn-primary" name="bTampil">Tampilkan Data</button>
        </form>
        <div id="ClassPrint">
        <?php
        require_once '../config/init.php';
       
        if(isset($_POST['bTampil'])){

            $tglawal=$_POST['txttglawal'];
            $tglakhir=$_POST['txttglakhir'];
            ?>
            <br/>
            <h3 align="center">LAPORAN TRANSAKSI PEMINJAMAN</h3>
            <h4 align="center">PERUSTAKAAN MEDIABook</h4>
            <h4 align="center">______________________________________________________________________</h4>
            <br/>
            <p align="center"><b>PERIODE TANGGAL : <?php echo $tglawal; ?> S.D <?php echo $tglawal; ?></b></p>
            <table class="table table-bordered">
            <thead>
                <tr border="1">
                    <th>ID Pinjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Nama Anggota</th>
                    <th>Petugas</th>
                    <th>Status Pinjam</th>
                </tr>
            </thead>
            <tbody>
                <?php
				//error_reporting(0);
				require_once '../config/init.php';
				
				$dt=new Laporan();
				foreach($dt->tampilLaporan($tglawal, $tglakhir) as $tampil){
				?>
                <tr border="1">
                    
                    <td><?php echo $tampil['id_pinjam'];?></td>
                    <td><?php echo $tampil['tgl_pinjam'];?></td>
                    <td><?php echo $tampil['tgl_kembali'];?></td>
                    <td><?php echo $tampil['nm_anggota'];?></td>
                    <td><?php echo $tampil['nm_petugas'];?></td>
                    <td><?php echo $tampil['status_peminjaman'];?></td>
                </tr>
                <?php
					}
				?>
            </tbody>
        </table>
        </div>
        <button type="button" class="btn btn-primary" onClick="printDokumen()" >Cetak Data ini</button>
        <?php

        }
        ?>
        
            </div>
    <div class="card-footer">
    </div>
</div>

<script>
    function printDokumen() {
        var printContents = document.getElementById('ClassPrint').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        location.reload();
    }
    </script>