<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Admin Rental</title>

  <!-- Bootstrap core CSS -->
  <?php echo $css; ?>
  <?php echo $dashboardcss; ?>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <!-- Custom styles for this template -->
  <!-- <style>
    body {
      font-size: .875rem;
    }

    .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;
    }

    /*
 * Sidebar
 */

    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 100;
      /* Behind the navbar */
      padding: 0;
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
    }

    .sidebar-sticky {
      position: -webkit-sticky;
      position: sticky;
      top: 48px;
      /* Height of navbar */
      height: calc(100vh - 48px);
      padding-top: .5rem;
      overflow-x: hidden;
      overflow-y: auto;
      /* Scrollable contents if viewport is shorter than content. */
    }

    .sidebar .nav-link {
      font-weight: 500;
      color: #333;
    }

    .sidebar .nav-link .feather {
      margin-right: 4px;
      color: #999;
    }

    .sidebar .nav-link.active {
      color: #007bff;
    }

    .sidebar .nav-link:hover .feather,
    .sidebar .nav-link.active .feather {
      color: inherit;
    }

    .sidebar-heading {
      font-size: .75rem;
      text-transform: uppercase;
    }

    /*
 * Navbar
 */

    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: 1rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .form-control {
      padding: .75rem 1rem;
      border-width: 0;
      border-radius: 0;
    }

    .form-control-dark {
      color: #fff;
      background-color: rgba(255, 255, 255, .1);
      border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
      border-color: transparent;
      box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }

    /*
 * Utilities
 */

    .border-top {
      border-top: 1px solid #e5e5e5;
    }

    .border-bottom {
      border-bottom: 1px solid #e5e5e5;
    }
  </style> -->
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
              <a class="nav-link active" href="#">
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
              <a class="nav-link" href="<?= base_url('index.php/aboutus') ?>">
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
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>

        <h4 style="text-align:center;">Grafik Stok Barang</h4>
        <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
        <br>
        <h4>Order Section</h4><br>
        <div class="table-responsive">
        <table id="table" class="table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Customer</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Pesan</th>
                    <th>Lama Sewa</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($orderan as $row): ?>
                <tr>
                    <td><?= $row['id_order'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['nama_barang'] ?></td>
                    <td><?= $row['jmlpesan'] ?></td>
                    <td><?= $row['lamasewa'] ?></td>
                    <td><?= $row['status'] ?></td>
                </tr>
            <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                <th>ID</th>
                    <th>Nama Customer</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Pesan</th>
                    <th>Lama Sewa</th>
                    <th>Status</th>
                </tr>
            </tfoot>
        </table>
        </div>
      </main>
    </div>
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




  <!-- Graphs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script>
    var ctx = document.getElementById("myChart");

    var densityData = {
      data: [<?php foreach($barang as $row){ ?>
                  <?= $row['stock'] ?>,
                <?php } ?>],
          lineTension: 0,
          <?php $i = 0 ?>
          backgroundColor: [<?php foreach($barang as $row){ ?>
                    'rgba(<?= $i ?>,99,132,0.6)' <?php $i = $i + 60 ?>,
                  <?php } ?>],
                  <?php $i = 0 ?>
          borderColor: [<?php foreach($barang as $row){ ?>
                    'rgba(<?= $i ?>,99,132,1)' <?php $i = $i + 60 ?>,
                  <?php } ?>],
          borderWidth: 4,
          pointBackgroundColor: '#007bff'
    };


    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [<?php foreach($barang as $row){ ?>
                    "<?= $row['nama_barang'] ?>",
                  <?php } ?>],
        datasets: [densityData],
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        },
        legend: {
          display: false,
        }
      }
    });
  </script>
</body>

</html>