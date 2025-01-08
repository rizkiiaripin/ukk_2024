<div class="card mb-4">
   
    <div class="card-header">
        
        <i class="fas fa-table me-1"></i>
        Rincian Transaksi 
        
    </div>
    <div class="card-body" >
        <div class="container-fluid">
        <form action="peminjaman/proses_peminjaman.php" method="post">
            <div class="row">
                <div id="ClassPrint">
                <div class="col-md-12">
                <?php
               
               require_once '../config/init.php';
                $id=$_GET['id'];
                $dt=new Peminjaman();
                foreach($dt->tampilPeminjamanSingle($id) as $tampil){
                echo 'ID Peminjaman  : '.$tampil['id_pinjaman']."<br/>";
                echo 'Tanggal Pinjam : '.$tampil['tgl_pinjam']."<br/>";
                echo 'Tanggal Kembali: '.$tampil['tgl_kembali']."<br/>";
                echo 'Anggota        : '.$tampil['nm_anggota']."<br/>";
                echo 'Petugas        : '.$tampil['nm_petugas']."<br/>";
                }
                ?>
                </div>
                <div class="col-md-12">
                    <br>
                        <table class="table table-bordered">
                            
                            <tr>
                                <td>Judul Buku</td>
                                <td>Jumlah</td>
                                <td>Status</td>
                                <td>Alasan</td>
                            </tr>
                            <?php 
                            $id=$_GET['id'];
                            $dt=new Peminjaman();
                            $i = 1;
                            foreach($dt->tampilPeminjamanDetail($id) as $tampil){
                            ?>
                            <tr>
                                <td>
                                        <input type="hidden" name="id_buku<?php echo $i; ?>" value="<?php echo $tampil['id_buku']; ?>" />
                                    <?php echo $tampil['judul']; ?>
                                </td>
                                <td class="col-md-2"><input type="number" name='jumlah<?php echo $i; ?>' value="<?php echo $tampil['jumlah'];?>" class="form-control"></td>
                                <td class="col-md-2">
                                    <select name='status<?php echo $i; ?>' class="form-control">
                                        <?php $status=$tampil['status']; 
                                        if ($status=="Diterima")
                                        {
                                        echo '<option value="Diterima" selected="selected"> Diterima </option>';
                                        echo '<option value="Ditolak"> Ditolak </option>';
                                        }
                                        else {
                                        echo '<option value="Diterima"> Diterima </option>';
                                        echo '<option value="Ditolak" selected="selected"> Ditolak </option>';
                                        }
                                        ?>
                                    </select> 
                                </td>
                                <td>
                                    <input type="text" class="form-control" name='alasan<?php echo $i; ?>'" value="<?php echo $tampil['alasan']; ?>">
                                </td>
                            </tr>
                            <?php
                            $i++;
                            }
                            $jumData = $i-1;
                            ?>
                        </table>
                </div>
                </div>
                <div class="col-md-12">
                        <input type="hidden" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" />
                        <input type="hidden" name="n" value="<?php echo $jumData; ?>" />
                        <input type="hidden" name="id_pinjam" value="<?php echo $id;?>">
                        <select name="txtproses" class="" style="width: 120px; height: 40px; border-radius:5px; border-color:cadetblue; padding:5px;">
                            <option value="Selesai">Selesaikan</option>
                            <option value="Batal">Batalkan</option>
                        </select>
                        <button type="submit" class="btn btn-primary" onClick="return confirm('Apakah Anda Yakin Menyelesaikan Transaksi Ini ? ')" 
                        <?php $status= $_GET['status']; if ($status!=="Proses" ){ echo "disabled='disabled'"; } ?> >Proses</button>
                        <button type="button" class="btn btn-primary" onClick="printDokumen()" <?php $status= $_GET['status']; if ($status=="Proses"){ echo "disabled='disabled'"; } ?> >Cetak Data ini</button>
                    <br/><br/>
                </div>
            </div>
        </form>
        </div>
    <div class="card-footer">
  	<a href="../administrator/index.php?menu=peminjaman"> <button class="btn btn-info">Kembali ke Daftar Peminjaman</button></a>
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