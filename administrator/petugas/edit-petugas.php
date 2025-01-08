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
                   $data = new Petugas();
                   foreach ($data->tampilPetugasSingle($id) as $tampil) {
                   ?>
                
        <form action="" method="post" enctype="multipart/form-data">
        <td>
           

            <div class="form-floating mb-3">
                <input type="text" value="<?php echo $tampil['id_petugas'];?>" class="form-control" id="floatingInput" name="txtid" placeholder="Id buku" required disabled>
                <label for="floatingInput">ID Anggota</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" value="<?php echo $tampil['username'];?>" class="form-control" id="floatingInput" name="txtuser" placeholder="Judul buku.." required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" value="<?php echo $tampil['status'];?>" class="form-control" id="floatingInput" name="txtstatus" placeholder="tahun penerbit" required>
                <label for="floatingInput">Status</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" value="<?php echo $tampil['password'];?>" class="form-control" id="floatingInput" name="txtpassword" placeholder="tahun penerbit" required>
                <label for="floatingInput">Password</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" value="<?php echo $tampil['nm_petugas'];?>" class="form-control" id="floatingInput" name="txtnama" placeholder="tahun penerbit" required>
                <label for="floatingInput">nama</label>
            </div>
            
          
            
            <div class="form-floating mb-3">
                <select class="form-control" name="txtgender" id="floatingInput" >
                <option value="<?= $tampil['jk'];?>">Pilih Gender</option>
                   
                    <option value="L">Laki laki</option>
                    <option value="P">Perempuan</option>
                </select>
                <label for="floatingInput">kategori Buku</label>
                
            </div>
            <div class="form-floating mb-3">
               <textarea class="form-control" id="floatingInput" name="txtalamat" required><?php echo $tampil['alamat_petugas'];?></textarea>
                <label for="floatingInput">Alamat</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" value="<?php echo $tampil['telp_petugas'];?>" class="form-control" id="floatingInput" name="txttelepon" placeholder="Nama pengarang" required >
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
   $user = $_POST['txtuser'];
   $status = $_POST['txtstatus'];
   $pass = $_POST['txtpassword'];
   $nama = $_POST['txtnama'];
   $gender = $_POST['txtgender'];
   $telepon = $_POST['txttelepon'];
   $alamat = $_POST['txtalamat'];
   
   

        $data = new Petugas();
        $data->editPetugas($id,$user,$status,$pass,$nama,$gender,$telepon,$alamat);
        echo"<script>
        alert( 'data diedit');
         document.location.href='index.php?menu=petugas';
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

