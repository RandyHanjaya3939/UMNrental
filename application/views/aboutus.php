<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>About Us</title>

    <!-- Bootstrap core CSS -->
    <?php echo $css; ?>
    <?php echo $dashboardcss; ?>

</head>

<body>
    <nav class="navbar navbar-dark sticky-top bg-dark navbar-expand flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">UMNRental</a>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">

        <ul class="navbar-nav px-3">
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow text-nowrap">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600"><?= $admin['nama'];?></span>
                <!-- <img class="img-profile rounded-circle" src="<?= base_url('assets/img/MyProfile/').$user['image'];?>"> -->
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('index.php/welcome/admin') ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    User View
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

    <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('index.php/admin') ?>">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('index.php/admin/barangview')?>">
                <span data-feather="shopping-cart"></span>
                CRUD Barang
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('index.php/admin/order') ?>">
                <span data-feather="file"></span>
                Order
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('index.php/admin/customer') ?>">
                <span data-feather="users"></span>
                Customers
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Reports
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="layers"></span>
                About Us
              </a>
            </li>
          </ul>

          

          <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
              <span data-feather="plus-circle"></span>
            </a>
          </h6> -->
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('index.php/welcome/admin') ?>">
                <span data-feather="file-text"></span>
                User View
              </a>
            </li>
          </ul>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
              </a>
            </li> -->
          </ul>
        </div>
      </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">



    <div class="container marketing">
        <h1 style="text-align:center;">About US</h1>
        <br>

<!-- Three columns of text below the carousel -->
        <div class="row mt-auto">
            <div class="col-lg-3">
                <img class="rounded-circle img-fluid" src="<?= base_url('assets/admin/juan.jpg') ?>" alt="Generic placeholder image">
                <h5>Juan</h5>
                <p>Designer handal.<br> Motto hidup : Kuliah sambil kerja.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="<?= base_url('assets/admin/randy.jpg') ?>" alt="Generic placeholder image" width="140" height="140">
                <h5>Randy Hanjaya</h5>
                <p>Programmer handal.<br> Motto hidup : kerja cepat ngak kenal lelah.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="<?= base_url('assets/admin/alvin.jpg') ?>" alt="Generic placeholder image" width="140" height="140">
                <h5>Richard Alvin Pratama</h5>
                <p>Programmer biasa.<br> Motto hidup : habiskan timeline elearning.</p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-3">
                <img class="rounded-circle" src="<?= base_url('assets/admin/sion.jpg') ?>" alt="Generic placeholder image" width="140" height="140">
                <h5>Sion Theodorus Syaron Darmawan</h5>
                <p>Hostingers.<br> Motto hidup : Kuliah sambil ngajar.</p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div>
    </main>
</div>
</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo $js; ?>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->


    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

    <!-- Datatables -->

</body>

</html>