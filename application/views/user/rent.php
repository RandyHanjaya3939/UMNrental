<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <?php echo $css; ?>


    <!-- Custom styles for this template -->
    <?php echo $carouselcss; ?>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">UMNRental</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <?php if ($user) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("index.php/welcome/") ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Rent<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("index.php/welcome/cart") ?>">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("index.php/welcome/order") ?>">Orderan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("index.php/aboutus/user") ?>">About</a>
                        </li>
                    <?php } else if ($admin) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("index.php/welcome/admin") ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("index.php/aboutus") ?>">About</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <ul class="navbar-nav px-3">
                <div class="topbar-divider d-none d-sm-block"></div>
                <?php if ($user) { ?>
                    <li class="nav-item dropdown no-arrow text-nowrap">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600"><?= $user['nama']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('index.php/welcome/profile') ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('index.php/login/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                <?php } else if ($admin) { ?>
                    <li class="nav-item dropdown no-arrow text-nowrap">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600"><?= $admin['nama']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('index.php/admin') ?>">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Admin's Room
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('index.php/login/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                <?php } ?>
            </ul>

        </nav>
    </header>

    <body>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="container-fluid px-5">
                    <?php
                    echo form_open_multipart(base_url('index.php/welcome/search'));
                    ?>
                    <div class="input-group pt-3 px-3">
                        <input type="text" name="search" id="search" class="form-control" style="width: 40%;" placeholder="Cari konsol pilihan anda">
                        <div class="input-group-append">
                            <!-- <a href="#" class="btn btn-outline-primary" type="button">Search!</a> -->
                            <button class="btn btn-primary"  type="submit" name="search">Search!</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>

                </div>
            </div>
            <hr class="mx-5">
            <div class="row">
                <div class="col mb-4 px-5">
                    <div class="container-fluid">
                        <div class="row justify-content-end m-0">
                            <a href="<?= base_url('index.php/welcome/cart') ?>" class="btn btn-primary"><i class="bi bi-cart4"></i> Lihat Keranjang</a>
                        </div>
                    </div>
                    <?php foreach ($barang as $row) { ?>
                        <div class="card mb-2 mt-3 mx-3">
                            <h5 class="card-header"><?= $row['nama_barang'] ?></h5>
                            <div class="card-body">
                                <div class="media">
                                    <img class="align-self-center mr-3 img-fluid" style="max-width: 400px; height:auto" src="<?= base_url($row['gambar']) ?>" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div class="row mt-2 m-0">
                                            <p><?= $row['deskripsi'] ?></p>

                                        </div>
                                        <div class="row mt-2 m-0">
                                            <div class="col-8">
                                                <ul class="list-unstyled">
                                                    <li>Fasilitas</li>
                                                    <ul>
                                                        <li>2 Controller</li>
                                                        <li>2 Game gratis untuk dipinjam</li>
                                                        <li>Bayar di tempat</li>
                                                        <li>Gratis pengiriman express</li>
                                                    </ul>
                                                </ul>
                                                <p class="lead">Sisa barang: <?= $row['stock'] ?></p>
                                            </div>
                                            <div class="col px-3">
                                                <!-- <div class="input-group mt-5 px-5">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary" type="button" id="btncounter1" onclick="counterplus()"><i class="bi bi-plus-circle"></i></button>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary" type="button" id="btncounter2" onclick="countermin()"><i class="bi bi-dash-circle"></i></button>
                                                </div>
                                                <div class="input-group-prepend" style="margin-left:15px; margin-right:15px; margin-top:5px">
                                                    <h5 id="hasil">0</h5>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">hari</span>
                                                </div>
                                            </div> -->

                                                <?php if ($test) { ?>
                                                    <?php
                                                    echo form_open_multipart(base_url('index.php/welcome/cartAdd/' . $row['id_barang'] . '/' . $test['0']['lamasewa']));
                                                    ?>
                                                    <div class="form-group">
                                                        <div class="col-sm-6">
                                                        <label for="lamasewa">Lama Sewa : </label>
                                                            <div class="input-group">
                                                                <input type="text" width="170px;" class="form-control" id="lamasewa" name="lamasewa" value="<?= $test['0']['lamasewa'] ?>" disabled>
                                                                <div class="input-grup-append">
                                                                    <span class="input-group-text">hari</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <?php
                                                    echo form_open_multipart(base_url('index.php/welcome/cartAdd/' . $row['id_barang']));
                                                    ?>
                                                    <div class="form-group">
                                                    <label for="lamasewa">Lama Sewa : </label>
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <input type="number" min="1" max="100" width="170px;" class="form-control" id="lamasewa" name="lamasewa" value="1">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">hari</span>
                                                                </div>
                                                            </div>

                                                            <span style="color:red;"><?= form_error('lamasewa'); ?></span>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="form-group">
                                                    <div class="col-sm-6"></div>
                                                    <button class="btn btn-primary btn-block" style="margin-left:15px; margin-right:5px;" type="submit" name="edit"><i class="bi bi-cart-plus"></i> Tambah ke keranjang</button>
                                                </div>
                                                <?php echo form_close(); ?>
                                            </div>
                                        </div>
                                        </form>
                                        <div class="row m-0">
                                            <h3>Rp. <?= number_format($row['harga'], 0, ',','.') ?><small>/hari</small></h3>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                    <div class="container-fluid mt-2">
                        <div class="row m-0">
                            <a href="<?= base_url('index.php/welcome/cart') ?>" class="btn btn-primary btn-lg btn-block">Lihat Keranjang</a>
                        </div>
                    </div>

                </div>

                <!-- <div class="card mb-3 mx-3">
                        <h5 class="card-header">Xbox Series X</h5>
                        <div class="card-body">
                            <div class="media">
                                <img class="align-self-center mr-3 img-fluid" style="max-width: 400px; height:auto" src="../assets/ghotel/value.jpg" alt="Generic placeholder image">
                                <div class="media-body">
                                    <div class="row m-0">
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>

                                    </div>
                                    <div class="row m-0">
                                        <div class="col-8">
                                            <ul class="list-unstyled">
                                                <li>Fasilitas</li>
                                                <ul>
                                                    <li>2 Xbox Series Controller</li>
                                                    <li>2 Free game</li>
                                                    <li>Vestibulum laoreet porttitor sem</li>
                                                    <li>Ac tristique libero volutpat at</li>
                                                </ul>
                                            </ul>
                                            <p class="lead">Sisa barang: 3</p>
                                        </div>
                                        <div class="col px-5">
                                            <div class="input-group mt-5 px-5">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="bi bi-plus-circle"></i></button>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="bi bi-dash-circle"></i></button>
                                                </div>
                                                <input type="text" class="form-control" style=" max-width:50px" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">hari</span>
                                                </div>
                                            </div>
                                            <h3 class="mt-2 px-5"><strong>Rp. 9.900<small><b>/hari</b></small></strong></h3>
                                            <a href="#" class="btn btn-primary btn-block">Tambah ke keranjang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->


            </div>

        </div>

        </div>

        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('index.php/login/logout') ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>



    </body>
    <?php echo $js ?>

    <!-- <script type="text/javascript">
    function onDocumentFinish(){
        var count = 0;

        var button1 = document.getElementById("btncounter1");
        button1.onclick = function counterplus(){
            count = count+1;
            document.getElementById("hasil").innerHTML = count;
        }

        var button2 = document.getElementById("btncounter2");
        button2.onclick = function countermin(){
            if(count == 0){
                document.getElementById("hasil").innerHTML = count; 
            }else{
                count = count-1;
                document.getElementById("hasil").innerHTML = count;
            }
        } 
    }

    </script> -->

</html>