
<?php
session_start();

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="book.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="assets/css/tiny-slider.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<title>MediaBook </title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark sticky-top" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.php">MEDIABook<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			
				<div class="collapse navbar-collapse" id="navbarsFurni">
					
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<div class="d-flex w-100 gap-2">
					<li class="nav-item dropdown position-relative">
					<a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Kategori
					</a>
					<ul class="dropdown-menu position-absolute" aria-labelledby="navbarDropdown">
						
					<?php 
					require_once 'config/init.php';
					$data = new Kategori;
					
					foreach ($data->tampilkategori() as $tampil) {
					
					?>
					
						<li ><a class="dropdown-item"  href="konten.php?link=kat&kt=<?=$tampil['id_kategori']?>"><?= $tampil['nm_kategori']?></a></li>
					<?php } ?>
						
					</ul>
					</li>	
					<li class="nav-li">
							<form role="search" method="post" action="shop.php" class="search-box">
								<input class="search-input" placeholder="Cari.." name="txtcari" type="text" autocomplete="off">
								<button class="btn-search" name="cari"><i class="fa-solid fa-magnifying-glass" style="color: white;"></i></button>
							</form>
						</li>
						</div>
						<li class="nav-li">
							<a class="nav-link" href="index.php#">Halaman</a>
						</li>
						<li class="nav-li"><a class="nav-link" href="index.php#about">Tentang</a></li>
						
						<li class="nav-li"><a class="nav-link" href="index.php#contact">Kontak</a></li>
						<li class="nav-li"><a class="nav-link" href="konten.php?link=all">Buku</a></li>
						
					</ul>
				
					
					
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						
					<?php if (!isset($_SESSION['status'])) {
  
?>
						<li><a class="nav-link" href="public/login.php"><img src="assets/images/user.svg"></a></li>
						<?php } else{?>
						<li><a class="nav-link" href="profil.php"><img src="assets/images/user.svg"></a></li>
						<?php }?>
						<li><a class="nav-link " href="cart.php"><img src="assets/images/cart.svg">
					<?php
					if (isset($_SESSION['keranjang'])) {
						echo count($_SESSION['keranjang']);
					}
					
					?>
					
					</a></li>
						
					</ul>
				</div>
			</div>
				
		</nav>