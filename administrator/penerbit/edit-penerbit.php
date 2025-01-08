<?php 
    require '../config/koneksi2.php';
    require '../config/sql.php';
?>




<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1">
        </i>
        Tambah Data
    </div>
    <div class="card-body">
            <?php 
                    require_once '../config/koneksi2.php';
                   require_once '../config/sql.php';
                   $id = $_GET['id'];
                   $data = new Penerbit();
                   foreach ($data->tampilPenerbitSingle($id) as $tampil) {
                   ?>
                
        <form action="" method="post" enctype="multipart/form-data">
        <td>
           

            <div class="form-floating mb-3">
                <input type="text" value="<?php echo $tampil['id_penerbit'];?>" class="form-control" id="floatingInput" name="txtid" placeholder="Id buku" required disabled>
                <label for="floatingInput">ID penerbit</label>
            </div>
            
            
            <div class="form-floating mb-3">
                <input type="text" value="<?php echo $tampil['nm_penerbit'];?>" class="form-control" id="floatingInput" name="txtnama" placeholder="tahun penerbit" required>
                <label for="floatingInput">nama</label>
            </div>
            
          
            
            <div class="form-floating mb-3">
               <textarea class="form-control" id="floatingInput" name="txtalamat" required><?php echo $tampil['alamat_penerbit'];?></textarea>
                <label for="floatingInput">Alamat</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" value="<?php echo $tampil['telp_penerbit'];?>" class="form-control" id="floatingInput" name="txttelepon" placeholder="Nama pengarang" required >
                <label for="floatingInput">Telepon</label>
            </div>

           

            <button type="submit" name="bsimpan" class="btn btn-info">Simpan Perubahan</button>
            <button type="submit" class="btn btn-secondary">Reset</button>
            <br><br>
            <a href="index.php?menu=buku">Kembali</a>
        </form>
        <?php } ?>
    </div>
</div>
<?php
 require_once '../config/koneksi2.php';
 require_once '../config/sql.php';
if (isset($_POST['bsimpan'])) {
   
   $id = $_GET['id'];
   $nama = $_POST['txtnama'];

   $alamat = $_POST['txtalamat'];
   $telepon = $_POST['txttelepon'];
   

        $data = new Penerbit();
        $data->editPenerbit($id,$nama,$alamat,$telepon);
        echo"<script>
        alert( 'data diedit');
         document.location.href='index.php?menu=penerbit';
        </script>";


 
}


?>

<script type="text/javascript">
    function PreviewImage() {
    let oFReadear = new FileReader();
    oFReadear.readAsDataURL(document.getElementById("nama_file").files[0]);
    oFReadear.onload = function(oFREvent) {
        document.getElementById("preview").src = oFREvent.target.result;

        }
    }
</script>

</form>

