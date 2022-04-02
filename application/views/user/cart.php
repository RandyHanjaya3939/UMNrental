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


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

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
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url("index.php/welcome/rent") ?>">Rent<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Cart</a>
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
    <div class="container mt-4">

    <?= $this->session->flashdata('alert')?>

        <div class="card">
            <table class="table table-hover shopping-cart-wrap">
                <thead class="text-muted">
                    <tr>
                        <th scope="col" width="300px">Product</th>
                        <th scope="col" width="200">Durasi Peminjaman</th>
                        <th scope="col" width="170">Price</th>
                        <th scope="col" width="200" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if($cart) {?>
                <?php foreach($cart as $row){ ?>
                    <tr>
                        <td width="200px">
                            <figure class="media">
                                <div class="img-wrap"><img src="<?= base_url($row['gambar']) ?>" class="img-thumbnail img-fluid"></div>
                            </figure>
                        </td>
                        <td>
                        <h4 class="title text-truncate"><?= $row['nama_barang']?></h4>
                        <h5 class="title text-truncate">Lama Sewa : <?= $row['lamasewa']?> hari</h5>
                        </td>
                        <td>
                            <h3>Rp. <?= number_format($row['total'], 0, ',','.') ?></h3>
                        </td>
                        <td class="text-center" width="200px">

                            <a href="<?= base_url('index.php/welcome/deleteCart/'.$row['id_cart']) ?>" class="btn btn-outline-danger"><i class="bi bi-cart-x"></i> Remove</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php }else{ ?>
                        <tr>
                        <th colspan="4" style="text-align:center;">Belum ada barang di shopping cart</th>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="container-fluid mt-2 p-0">
            <div class="row  justify-content-end m-0">
                <a href="#" class="btn btn-primary btn-round" data-toggle="modal" data-target="#checkout">Go to checkout</a>
            </div>
        </div>

    </div>
    <!--container end.//-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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

    <div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CheckOut</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <table class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Lama Sewa</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    <?php $final = 0 ?>
                    <?php foreach($cart as $row){ ?>
                        <tr>
                            <td><?= $i++?></td>
                            <td><?= $row['nama_barang'] ?></td>
                            <td><?= $row['lamasewa'] ?> hari</td>
                            <td>Rp.<?= $row['total']?></td>
                        </tr>
                        <?php $final = $row['total'] + $final ?>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td>Rp.<?= $final ?></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('index.php/welcome/orderAdd') ?>">Order</a>
                </div>
            </div>
        </div>
    </div>
</body>
<?php echo $js ?>

<!-- <script type="text/javascript">
function onDocumentFinish(){
    var count = <?= $row['lamasewa'] ?>;
    button1.onclick = function counterplus(){
        count = count+1;
        document.getElementById("hasil").innerHTML = count;
    }

    var button2 = document.getElementById("btncounter2");
    button2.onclick = function countermin(){
        count = count-1;
        document.getElementById("hasil").innerHTML = count;
    } 
}

</script> -->

</html>