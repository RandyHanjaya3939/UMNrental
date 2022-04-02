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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/welcome/") ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/welcome/rent") ?>">Rent<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('index.php/welcome/cart') ?>">Cart</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Orderan</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("index.php/aboutus/user") ?>">About</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav px-3">
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow text-nowrap">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600"><?= $user['nama'];?></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                      aria-labelledby="userDropdown">
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
            </ul>

        </nav>
    </header>

    <div class="container">
        <br><br>
        <h2>Orderan <?= $user['nama'] ?></h2>
        <table id="table" class="table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Pesan</th>
                    <th>Lama Sewa</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            <?php foreach($order as $row): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row['nama_barang'] ?></td>
                    <td><?= $row['jmlpesan'] ?></td>
                    <td><?= $row['lamasewa'] ?></td>
                    <td><?= $row['status'] ?></td>
                    <td>
                    <?php if($row['status'] == "Sedang Dikirim" || $row['status'] == "Siap di Pick-up" || $row['status'] == "Selesai") { ?>
                        <a href="#" data-toggle="modal" data-target="#status1Modal<?= $row['id_order'] ?>"><button class="btn"><i style="color:rgb(255,215,0);" class="bi bi-pencil-square"></i></button></a>
                    <?php } else if($row['status'] == "Sudah Dikirim"){?>
                        <a href="#" data-toggle="modal" data-target="#statusModal<?= $row['id_order'] ?>"><button class="btn"><i style="color:rgb(255,215,0);" class="bi bi-pencil-square"></i></button></a>
                    <?php } ?>
                    </td>
                </tr>

                <div class="modal fade" id="statusModal<?= $row['id_order'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body form-group">
                            <label for="status">Change Status</label>
                            <?php 
                            echo form_open_multipart(base_url('index.php/welcome/changeStatus/'.$row['id_order']));
                            ?>
                                <select name="status" id="status" class="form-control">
                                <option selected>Sedang Dikirim</option>
                                <option></option>Siap di Pick-up</option>
                                </select>
                            </div>
                            <div class="modal-footer form-group">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" style="margin-left:15px; margin-right:5px;" type="submit" name="edit">Change</button>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="status1Modal<?= $row['id_order'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Status</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body form-group">
                                <?php if($row['status'] == "Sedang Dikirim") { ?>
                                <h2>Status belum berubah menjadi "Sudah Dikirim"<br>Tunggu hingga barang terkirim.</h2>
                                <?php } else if($row['status'] == "Siap di Pick-up") {?>
                                <h2>Barang yang siap di pick up tidak dapat dibatalkan</h2>     
                                <?php } else if($row['status'] == "Selesai") {?>
                                <h2>Order Barang sudah selesai</h2>      
                                <?php } ?>
                            </div>
                            <div class="modal-footer form-group">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Pesan</th>
                    <th>Lama Sewa</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>




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

    <?php echo $js ?>
</body>
</html>