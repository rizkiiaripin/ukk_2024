<div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Transaksi Peminjaman
                                    <?php
                                        require_once '../config/koneksi2.php';
                                        require_once '../config/sql.php';

                                        $data =new Peminjaman();
                                        foreach ($data->totalPeminjaman() as $tampil) {
                                        ?>
                                        <p><b>Total : <?= $tampil['jumlah'];?> data</b></p>
                                    <?php 
                                        }
                                    ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Pengembalian
                                    <?php
                                        require_once '../config/koneksi2.php';
                                        require_once '../config/sql.php';

                                        $data =new Pengembalian();
                                        foreach ($data->tampilPengembalian() as $tampil) {
                                        ?>
                                        <p><b>Total : <?= $tampil['jumlah'];?> data</b></p>
                                    <?php 
                                        }
                                    ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Anggota
                                    <?php
                                        require_once '../config/koneksi2.php';
                                        require_once '../config/sql.php';

                                        $data =new Anggota();
                                        foreach ($data->totalanggota() as $tampil) {
                                        ?>
                                        <p><b>Total : <?= $tampil['jumlah'];?> data</b></p>
                                    <?php 
                                        }
                                    ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Buku
                                    <?php
                                        require_once '../config/koneksi2.php';
                                        require_once '../config/sql.php';

                                        $data =new Buku();
                                        foreach ($data->totalBuku() as $tampil) {
                                        ?>
                                        <p><b>Total : <?= $tampil['jumlah'];?> data</b></p>
                                    <?php 
                                        }
                                    ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Penerbit
                                    <?php
                                        require_once '../config/koneksi2.php';
                                        require_once '../config/sql.php';

                                        $data =new Penerbit();
                                        foreach ($data->totalPenerbit() as $tampil) {
                                        ?>
                                        <p><b>Total : <?= $tampil['jumlah'];?> data</b></p>
                                    <?php 
                                        }
                                    ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Kategori Buku
                                    <?php
                                        require_once '../config/koneksi2.php';
                                        require_once '../config/sql.php';

                                        $data =new Kategori();
                                        foreach ($data->totalKategori() as $tampil) {
                                        ?>
                                        <p><b>Total : <?= $tampil['jumlah'];?> data</b></p>
                                    <?php 
                                        }
                                    ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Petugas
                                    <?php
                                        require_once '../config/koneksi2.php';
                                        require_once '../config/sql.php';

                                        $data =new Petugas();
                                        foreach ($data->totalPetugas() as $tampil) {
                                        ?>
                                        <p><b>Total : <?= $tampil['jumlah'];?> data</b></p>
                                    <?php 
                                        }
                                    ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>