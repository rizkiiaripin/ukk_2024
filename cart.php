
<?php error_reporting(E_ERROR | E_PARSE);
?>
<?php
session_start();

if ($_SESSION["login"]!=="login")
{
  
  echo "<script>
  alert('Anda harus login dulu sebelum meminjam')
  window.location.href = 'public/login.php';
          
  </script>";
}
?>
<?php error_reporting(E_ERROR | E_PARSE);
?>

<?php include'navbar.php';?>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Cart</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section before-footer-section">
            <div class="container">
              <div class="row mb-5">
                <form class="col-md-12" method="post" action="public/tambah_pinjam.php?id=<?=$row['id_buku'];?>" >
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                           <th class="product-quantity">Quantity</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php

                      
                      $konek = mysqli_connect('localhost','root','','ukk2024_perpus_mrizkixiirpl1');
                      $cart = $_SESSION['keranjang'];
                        
                      foreach ($cart as $key => $value) {
                        $sql = "SELECT * from tbl_buku where id_buku = '$key'";
                        $result = mysqli_query($konek,$sql); 
                        $row = mysqli_fetch_assoc($result);
                        
                        ?>
                        <tr>
                          <td class="product-thumbnail">
                            <img src="administrator/assets/img/<?= $row ['foto_sampul'];?>" alt="Image" class="img-fluid" width="120px">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black"><?php echo $row['judul'];?></h2>
                          </td>
                          
                          <td>
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <div class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                              </div>
                              <input type="number" class="form-control text-center quantity-amount" name="qty" value="<?php echo $value ;?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <input type="text" class="form-control text-center " name="id" value="<?php echo $row['id_buku'];?>" placeholder="" hidden = 'hidden'>
                              <div class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                              </div>
                            </div>
        
                          </td>
                          <td></td>
                          <td><a href="public/hapus.php?id=<?=$row['id_buku'];?>" class="btn btn-black btn-sm" onclick="return confirm('apakah anda yakin menghapus data ini');">X</a></td>
                        </tr>
                      <?php } ?>                             
                          
                      </tbody>
                    </table>
                  </div>
                  <?php
                    require_once'config/init.php';
                    $data = new Peminjaman;
                    ?>
                    <input type="text" name="txtiddetail" value="<?php echo $data->idOtomatisDetail()?>" hidden="hidden"> 
                    <input type="text" name="txtid" value="<?php echo $data->idOtomatis()?>" hidden="hidden">
                    <button class="btn btn-black btn-lg py-3 btn-block" type="submit" name="simpan"  >pinjam</button>
                    
                  </form>
              </div>
        
            </div>
          </div>
		

		<!-- Start Footer Section -->
		<?php include'footer.php'; ?>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
