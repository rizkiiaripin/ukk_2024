
<!DOCTYPE html>
<html lang="en">
<?php
require_once '../config/init.php';

$data = new Anggota();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<!-- Login 5 - Bootstrap Brain Component -->
<section class="p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="card border-light-subtle shadow-sm">
      <div class="row g-0">
      <div class="col-12 col-md-6 text-bg-primary">
          <div class="d-flex align-items-center justify-content-center h-100">
            <div class="col-10 col-xl-8 py-3">
            <div class="navbar-brand " >MEDIABook<span>.</span></div>
              
              <hr class="border-primary-subtle mb-4">
              <h2 class="h1 mb-4">Menyediakan Berbagai Buku</h2>
              <p class="lead m-0">Tempat Nyaman ,Bersih , Dan Rapih tentunya</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="card-body p-3 p-md-4 p-xl-5">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h3>Login</h3>
                </div>
              </div>
            </div>
            <form action="" method="post">
              <div class="row gy-3 gy-md-4 overflow-hidden">
              
              <div class="col-12">
                  <input type="text" class="form-control" id="txtid" name="txtid" value="<?php echo $data->idOtomatis();?>" hidden>
                </div>
                <div class="col-12">
                  <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username" required>
                </div>
                <div class="col-12">
                  <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required>
                </div>
              
                <div class="col-12">
                  <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama" required>
                </div>

                <div class="col-12">
                <label for="password" class="form-label">Gender <span class="text-danger">*</span></label>  
                <select class="form-select" aria-label="Default select example" name="jk">
                
                <option value="L">Laki</option>
                <option value="P">Perempuan</option>
                </select>
                </div>

                <div class="col-12">
                <label for="floatingTextarea2">Alamat</label>
                <textarea class="form-control" placeholder="Leave a comment here" name="alamat" id="floatingTextarea2" style="height: 100px"></textarea>
                
                </div>
                
                

                <div class="col-12 mb-3">
                  <label for="notelepon" class="form-label">No Telepon <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="notelepon" id="notelepon" placeholder="Masukan No Telepon" required>
                </div>

                </div>
              
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-primary" type="submit" name="bsimpan">Daftar</button>
                  </div>
                </div>
              </div>
            </form>
            <?php
            
            if (isset($_POST['bsimpan'])) {
                $id = $_POST['txtid'];
                $user = $_POST['username'];
                $status = "aktif";
                $pass = $_POST['password'];
                $nama = $_POST['nama'];
                $gender = $_POST['jk'];
                $alamat = $_POST['alamat'];
                $telepon = $_POST['notelepon'];
                
                $data = new Anggota();
                $data->inputAnggotaRegister($id,$user,$status,$pass,$nama,$gender,$alamat,$telepon);
                
                

            }
            
            
            
            ?>
            <div class="row m-2">
              <div class="col-12">
                <hr class="mt-5 mb-4 border-secondary-subtle">
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                  <a href="login.php" class="text-decoration-none">Login Disini</a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>


