    <div class="card-header mb-3">  
        <b>Rincian Pengembalian :</b>
    </div>
    <div class="card-body mb-3">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
        <form action="pengembalian/proses_pengembalian.php" method="post">
        <br/>
        <?php
        error_reporting(0);
        require_once '../config/koneksi2.php';
        require_once '../config/sql.php';
        $id=$_GET['id'];
        $dt=new Peminjaman();
        foreach($dt->tampilPeminjamanSingle($id) as $tampil){
           echo '<input type="hidden" name="txtidpinjam" value="'.$tampil['id_pinjam'].'" /> ID Peminjaman  : '.$tampil['id_pinjam']."<br/>";
           echo '<input type="hidden" name="txttglpinjam" value="'.$tampil['tgl_pinjam'].'" />Tanggal Pinjam : '.$tampil['tgl_pinjam']."<br/>";
           echo '<input type="hidden" name="txttglkembali" value="'.$tampil['tgl_kembali'].'" />Tanggal Kembali: '.$tampil['tgl_kembali']."<br/>";
           echo '<input type="hidden" name="txtidanggota" value="'.$tampil['id_anggota'].'" />Anggota        : '.$tampil['nm_anggota']."<br/>";
           echo '<input type="hidden" name="txtidpetugas" value="'.$tampil['id_petugas'].'" />Petugas        : '.$tampil['nm_petugas']."<br/>";
           $time2 = new DateTime($tampil['tgl_kembali']);

        }
    
        $time1 = new DateTime(date("Y-m-d"));
        $interval = $time2->diff($time1)->format("%r%a");
        if ($interval<0)
        {
            $interval=0;
        }
        echo "Terlambat : $interval hari";
        $denda=$interval*2000;

        echo '<input type="hidden" name="txtdenda" value="'.$denda.'" /><h5 style="color:red;">Denda : Rp. '.$denda.'</h5>';
        ?>

        </div>
                <div class="col-md-12">
                    <br>
                    <table class="table table-bordered">
                            
                            <tr>
                                <td>Judul Buku</td>
                                <td>Jumlah Pinjam</td>
                                <td>Jumlah Kembali</td>
                                <td>Keterangan</td>
                                <td>Denda</td>
                            </tr>
                            <?php 
                            $id=$_GET['id'];
                            $dt=new Peminjaman();
                            $i = 1;
                            foreach($dt->tampilPeminjamanDetailDiterima($id) as $tampil){
                            ?>
                            <tr>
                                <td>
                                     <input type="hidden" name="idbuku<?php echo $i; ?>" value="<?php echo $tampil['id_buku']; ?>" />
                                    <?php echo $tampil['judul']; ?>
                                </td>
                                <td class="col-md-2">
                                    <input type="hidden" id='jumlah<?php echo $i; ?>' name='jumlah<?php echo $i; ?>' value="<?php echo $tampil['jumlah'];?>">
                                    <?php echo $tampil['jumlah'];?>
                                </td>
                                <td class="col-md-2">
                                    <input type="number" class="form-control" id='jmlkembali<?php echo $i; ?>' name='jmlkembali<?php echo $i; ?>' value="<?php //echo $tampil['jumlah']; ?>" required="required" onchange="changeValue(urut='<?php echo $i ?>')" >
                                </td>
                                <td>
                                    <input type="text" class="form-control" id='keterangan<?php echo $i; ?>' name='keterangan<?php echo $i; ?>'" required="required" readonly="readonly">
                                </td>
                                <td><input type="hidden" class="form-control" id='hargabeli<?php echo $i; ?>' name='hargabeli<?php echo $i; ?>'" value="<?php echo $tampil['harga_beli']; ?>">
                                    <input type="text" class="form-control" id='dendabuku<?php echo $i; ?>' name='dendabuku<?php echo $i; ?>'" required="required" readonly="readonly">
                                </td>
                            </tr>
                            <?php
                            $i++;
                            }
                            $jumData = $i-1;
                            ?>
                        </table>
                        <input type="hidden" name="n" value="<?php echo $jumData; ?>" />
                        <input type="hidden" name="id_pinjam" value="<?php echo $id;?>">
                        <button type="submit" class="btn btn-primary" onClick="return confirm('Apakah Anda Yakin Menyelesaikan Transaksi Ini ? ')" 
                        <?php $status= $_GET['status']; if ($status=="Selesai"){ echo "disabled='disabled'"; } ?> >Selesaikan Transaksi</button>
                    <br/><br/>
                    </form>
                </div>
            </div>
    </div>
    <div class="card-footer">
    </div>
</div>

<script type="text/javascript"> 
   
    function changeValue(urt=urut){
    var jml = document.getElementById("jumlah"+urt).value;
    var jmlkbl = document.getElementById("jmlkembali"+urt).value;
    var hrgbl= document.getElementById("hargabeli"+urt).value;
    var denda=(jml - jmlkbl)*hrgbl;
    if ( jmlkbl < jml )
    {
        document.getElementById("keterangan"+urt).value = "Denda"; 
    }
    else if ( jmlkbl > jml )
    {
        document.getElementById("jmlkembali"+urt).value = jmlkbl-1;
        denda=0;
        alert('Jumlah buku yang dikembalikan melebihi jumlah buku yang dipinjam');
    }
    else
    {
         document.getElementById("keterangan"+urt).value = "Sesuai"; 
    }
     document.getElementById("dendabuku"+urt).value = denda; 

};

</script>
