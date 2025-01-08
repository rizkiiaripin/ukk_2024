<?php include'navbar.php';?>
    
<?php



if ($_SESSION["login"] !=="login")
{
  header('location:public/login.php');
}
?>
<?php error_reporting(E_ERROR | E_PARSE);
?>

<div class="container">
    <div class="main-body">
          <div class="row gutters-sm mt-5">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="assets/images/1-min_61c088f9cb70e.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo  $_SESSION["nm_anggota"]; ?></h4>
                      <a href="public/logout.php"><button class="btn btn-primary mt-4"> Logout</button></a>
                      
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo  $_SESSION["nm_anggota"]; ?>
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telepon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo  $_SESSION["telepon"]; ?>
                    </div>
                  </div>
            <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo  $_SESSION["alamat"]; ?>
                    </div>
                  </div>
                  
                </div>
              </div>

          



            </div>
          </div>

        </div>
    </div>
    <?php include'footer.php';?>