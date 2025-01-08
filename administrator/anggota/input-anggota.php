<?php 
    require '../config/koneksi2.php';
    require '../config/sql.php';

$data = new Anggota(); ?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1">
        </i>
        Tambah Data
    </div>
    <div class="card-body">
                
        <form action="" method="post" enctype="multipart/form-data">
        <td>
           

            <div class="form-floating mb-3">
                <input type="text"  class="form-control" id="txtid" name="txtid" placeholder="Id buku"  required >
                <label for="floatingInput">ID Anggota</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="txtuser" placeholder="Judul buku.." required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-control" name="txtstatus" id="floatingInput" required>
                <option value="_">Status</option>
                   
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak aktif">Perempuan</option>
                </select>
               
                
            </div>
            <div class="form-floating mb-3">
                <input type="text"  class="form-control" id="floatingInput" name="txtpassword" placeholder="tahun penerbit" required>
                <label for="floatingInput">Password</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text"  class="form-control" id="floatingInput" name="txtnama" placeholder="tahun penerbit" required>
                <label for="floatingInput">nama</label>
            </div>
            
          
            
            <div class="form-floating mb-3">
                <select class="form-control" name="txtgender" id="floatingInput" required>
                <option value="_">Pilih Gender</option>
                   
                    <option value="L">Laki laki</option>
                    <option value="P">Perempuan</option>
                </select>
               
                
            </div>
            <div class="form-floating mb-3">
               <textarea class="form-control" id="floatingInput" name="txtalamat" required></textarea>
                <label for="floatingInput">Alamat</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"  class="form-control" id="floatingInput" name="txttelepon" placeholder="Nama pengarang" required >
                <label for="floatingInput">Telepon</label>
            </div>

           

            <button type="submit" name="bsimpan" class="btn btn-info">Simpan Perubahan</button>
            <button type="submit" class="btn btn-secondary">Reset</button>
            <br><br>
            <a href="index.php?menu=anggota">Kembali</a>
        </form>
      
    </div>
</div>
<?php
 require_once '../config/koneksi2.php';
 require_once '../config/sql.php';
if (isset($_POST['bsimpan'])) {
   
   $id = $_POST['txtid'];
   $user = $_POST['txtuser'];
   $status = $_POST['txtstatus'];
   $pass = $_POST['txtpassword'];
   $nama = $_POST['txtnama'];
   $gender = $_POST['txtgender'];
   $alamat = $_POST['txtalamat'];
   $telepon = $_POST['txttelepon'];
   

        $data = new Anggota();
        $data->inputAnggota($id,$user,$status,$pass,$nama,$gender,$alamat,$telepon);
        echo"<script>
        alert( 'data ditambahkan');
         document.location.href='index.php?menu=anggota';
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

