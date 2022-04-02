<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>User Rental</title>

    <!-- Bootstrap core CSS -->
    <?php echo $css ?>

    <!-- Custom styles for this template -->
    <?php echo $homecss ?>
  </head>

  <body>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="<?= base_url("index.php/welcome") ?>">UMNRental</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <?php if($user){ ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/welcome") ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/welcome/rent") ?>">Rent Now</a>
                    </li>
                    <li class="nav-item" style=>
                        <a class="nav-link" href="<?= base_url("index.php/welcome/cart") ?>">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/welcome/order") ?>">Orderan</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About</a>
                    </li>

                </ul>
              <?php } else if($admin){ ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/aboutus") ?>">About</a>
                    </li>

                </ul>
              <?php } else { ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/welcome") ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About</a>
                    </li>

                </ul>
              <?php } ?>
            </div>
            <ul class="navbar-nav px-3">
              <div class="topbar-divider d-none d-sm-block"></div>
              <?php if($user){ ?>
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
              <?php }else if($admin){ ?>
              <li class="nav-item dropdown no-arrow text-nowrap">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600"><?= $admin['nama'];?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
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

        <div class="container marketing" style="margin-top:100px;margin-bottom:50px;">
        <h1 style="text-align:center;">About US</h1>
        <br><br><br>

<!-- Three columns of text below the carousel -->
        <div class="row mt-auto">
            <div class="col-lg-3">
                <img class="rounded-circle" src="<?= base_url('assets/admin/juan.jpg') ?>" alt="Generic placeholder image" width="140" height="140">
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

    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <img class="img-fluid" src="<?= base_url('assets/pendukung/logo.jpg') ?>">
          <small class="d-block mb-3 text-muted">&copy; 2020-2021</small>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Cool stuff</a></li>
            <li><a class="text-muted" href="#">Random feature</a></li>
            <li><a class="text-muted" href="#">Team feature</a></li>
            <li><a class="text-muted" href="#">Stuff for developers</a></li>
            <li><a class="text-muted" href="#">Another one</a></li>
            <li><a class="text-muted" href="#">Last time</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Resource</a></li>
            <li><a class="text-muted" href="#">Resource name</a></li>
            <li><a class="text-muted" href="#">Another resource</a></li>
            <li><a class="text-muted" href="#">Final resource</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Resources</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Business</a></li>
            <li><a class="text-muted" href="#">Education</a></li>
            <li><a class="text-muted" href="#">Government</a></li>
            <li><a class="text-muted" href="#">Gaming</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <?php if($user) {?>
          <h5>About Us</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?= base_url('index.php/aboutus/user') ?>">About</a></li>
          </ul>
          <?php }else if($admin){ ?>
            <h5>About Us</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="<?= base_url('index.php/aboutus') ?>">About</a></li>
          </ul>
          <?php } ?>
        </div>
      </div>
    </footer>

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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo $js ?>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
