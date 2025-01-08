<?php
session_start();
if (isset($_SESSION['status'])) {
  
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <?php
  require_once'../config/init.php';
  ?>
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
            <form action="ceklogin.php" method="post">
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                  <input type="username" class="form-control" name="username" id="username" placeholder="Masukan Username" required>
                </div>
                
                <div class="col-12">
                  <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password" id="password" value="" placeholder="Masukan Password"  required>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                      ingat saya
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-info" type="submit" name="blogin">Login </button>
                  </div>
                </div>
              </div>
            </form>
            <?php
            if (isset($_SESSION['pesan'])) {           
            ?>
            <div class="alert alert-info text-center">
                <?= $_SESSION['pesan'];?>
            </div>
            <?php unset($_SESSION['pesan']);?>
            <?php } ?>
            <div class="row">
              <div class="col-12">
                <hr class="mt-5 mb-4 border-secondary-subtle">
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                  <a href="form_pendaftaran.php" class="text-decoration-none">Buat Akun Baru</a>
                  <a href="#!" class="link-secondary text-decoration-none">Lupa Password</a>
                  
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


