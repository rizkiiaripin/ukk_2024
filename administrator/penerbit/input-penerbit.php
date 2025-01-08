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
                <input type="text"  class="form-control" id="floatingInput" name="txtnama" placeholder="tahun penerbit" required>
                <label for="floatingInput">nama</label>
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
            <a href="index.php?menu=penerbit">Kembali</a>
        </form>
      
    </div>
</div>
<?php
 require_once '../config/koneksi2.php';
 require_once '../config/sql.php';
if (isset($_POST['bsimpan'])) {
   
   $id = $_POST['txtid'];
   $nama = $_POST['txtnama'];
   $alamat = $_POST['txtalamat'];
   $telepon = $_POST['txttelepon'];
   

        $data = new Penerbit();
        $data->inputPenerbit($id,$nama,$alamat,$telepon);
        echo"<script>
        alert( 'data ditambah');
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

