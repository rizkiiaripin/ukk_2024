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
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="">Gambar Buku</label><br>
                <input type="file" id="nama_file" onchange="PreviewImage();"  name="nama_file" accept="image/*" required>
                <img id="preview" src="" width="75" height="120">
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="txtid" placeholder="Id buku" required>
                <label for="floatingInput">ID Buku</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="txtjudul" placeholder="Judul buku.." required>
                <label for="floatingInput">Judul Buku</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" name="txtjml" placeholder="tahun penerbit" required>
                <label for="floatingInput">Jumlah</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="txttahun" placeholder="tahun penerbit" required>
                <label for="floatingInput">Tahun Terbit</label>
            </div>
            
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" name="txtisbn" placeholder="ISBN..." required>
                <label for="floatingInput">ISBN</label>
            </div>
            
            <div class="form-floating mb-3">
                <select class="form-control" name="txtktg" id="floatingInput" required>
                <option value="-">pilih kategori</option>
                   <?php 
                   require_once '../config/koneksi2.php';
                   require_once '../config/sql.php';
                   $data = new Kategori();
                   foreach ($data->tampilkategori() as $tampil) {
                   ?>
                    <option value="<?= $tampil['id_kategori']; ?>"><?= $tampil['nm_kategori']; ?></option>
                <?php } ?>
                </select>
                <label for="floatingInput">kategori Buku</label>
                <?php //} ?>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="txtpengarang" placeholder="Nama pengarang" required >
                <label for="floatingInput">Nama pengarang</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-control" name="txtpenerbit" id="floatingInput" required>
                <option value="-">pilih penerbit</option>
                   <?php 
                   require_once '../config/koneksi2.php';
                   require_once '../config/sql.php';
                   $data = new Penerbit();
                   foreach ($data->tampilpenerbit() as $tampil) {
                   ?>
                    <option value="<?= $tampil['id_penerbit']; ?>"><?= $tampil['nm_penerbit']; ?></option>
                <?php } ?>
                </select>
                <label for="floatingInput">penerbit</label>
                <?php //} ?>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="txtharga" placeholder="Harga" required>
                <label for="floatingInput">Harga Buku</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="txtlokasi" placeholder="Lokasi" required>
                <label for="floatingInput">Lokasi Buku</label>
            </div>
            <div class="form-floating mb-3">
               <textarea class="form-control" id="floatingInput" name="txtdes"     required></textarea>
                <label for="floatingInput">Deskripsi</label>
            </div>

            <button type="submit" name="bsimpan" class="btn btn-info">Simpan Data</button>
            <button type="submit" class="btn btn-secondary">Reset</button>
            <br><br>
            <a href="index.php?menu=buku">Kembali</a>
        </form>
    </div>
</div>
<?php
 require_once '../config/koneksi2.php';
 require_once '../config/sql.php';
if (isset($_POST['bsimpan'])) {
   
   $id = $_POST['txtid'];
   $judul = $_POST['txtjudul'];
   $thn = $_POST['txttahun'];
   $jml = $_POST['txtjml'];
   $isbn = $_POST['txtisbn'];
   $ktg = $_POST['txtktg'];
   $pengarang = $_POST['txtpengarang'];
   $penerbit = $_POST['txtpenerbit'];
   $harga = $_POST['txtharga'];
   $lokasi = $_POST['txtlokasi'];
   $des = $_POST['txtdes'];
    $nama_file = $_POST['nama_file'];

    //kode upload
    $lokasi_file = $_FILES['nama_file']['tmp_name'];
    $nama_file =  $_FILES['nama_file']['name'];

    //kode untuk menggganti spasi dan karakter pada nama file
    //serta karakter non alfabet menjadi garis bawah 

        $photo = preg_replace("/\s+/","_",$nama_file);
        $direktor = "assets/img/$photo";

        move_uploaded_file($lokasi_file,$direktor);

        $data = new Buku();
        $data->inputBuku( $id,$judul,$thn,$jml,$isbn,$ktg,$pengarang,$penerbit,$photo,$des,$harga,$lokasi);
        echo"<script>
        alert( 'data ditambahkan');
         document.location.href='index.php?menu=buku';
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

