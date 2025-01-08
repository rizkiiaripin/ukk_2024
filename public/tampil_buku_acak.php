<?php
					 require_once 'config/koneksi2.php';
					 require_once 'config/sql.php';
					 $data = new Buku();
					 
		 			foreach ($data->tampilbukuRandom() as $tampil ) {
					 ?>
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0 " <?php if ($tampil['jumlah'] <= 0) {
						?>hidden
					<?php } ?>>
					<a href="./read_more.php?id=<?= $tampil['id_buku'];?>" class="text-decoration-none"><p>lihat detail ></p></a>
						<div class="product-item">
							<img src="administrator/assets/img/<?= $tampil['foto_sampul'];?>" class="img-fluid product-thumbnail "  width="200px">
							<h3 class="product-title "><?= $tampil['judul']; ?></h3>
                            <p class="text-primary"><b><?= $tampil['pengarang']; ?></b></p>
							<span class="text-primary text-lg">Tersedia : <?= $tampil['jumlah']; ?></span>
							<form action="public/tambah_keranjang.php?id=<?php echo $tampil['id_buku'];?>" method="post">
								<button type="submit" class="icon-cross border-0">
								<img src="assets/images/cross.svg" class="img-fluid">
							</button>
							
							
							</form>
	
						</div>
						
					</div> 
					<!-- End Column 2 -->
					<?php } ?>