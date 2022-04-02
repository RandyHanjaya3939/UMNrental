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
            <a class="navbar-brand" href="#">UMNRental</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/login") ?>">Rent Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("index.php/aboutus/user") ?>">About</a>
                    </li>

                </ul>
            </div>
            <ul class="navbar-nav px-3">
              <li class="nav-item text-nowrap">
                <a class="nav-link" href="<?= base_url('index.php/login') ?>">Log In</a>
              </li>
            </ul>

        </nav>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">PlayStation® 5</h1>
        <p class="lead font-weight-normal">Lightning-fast loading with an ultra-high-speed SSD.</br>3D Audio with haptic feeback for deeper immersion.</br>All-new incredible PlayStation® games.</p>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Xbox Series X</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img class="img-fluid" style="max-width: 80%; height:auto"  src="<?= base_url('assets/barang/XBox_Series_X.jpg') ?>" alt="XBox_Series_X" srcset="">
      </div>
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">PlayStation® 4</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img class="img-fluid" style="max-width: 80%; height:auto"  src="<?= base_url('assets/barang/ps4.jpg') ?>" alt="XBox_Series_X" srcset="">
      </div>
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">PlayStation® 3</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-dark box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img class="img-fluid" style="max-width: 80%; height:auto"  src="<?= base_url('assets/barang/ps3.jpg') ?>" alt="XBox_Series_X" srcset="">
      </div>
      </div>
      <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Xbox Series S</h2>
          <p class="lead">And an even wittier subheading.</p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
        <img class="img-fluid" style="max-width: 80%; height:auto"  src="<?= base_url('assets/barang/XBox_Series_S.jpg') ?>" alt="XBox_Series_X" srcset="">
      </div>
      </div>
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
            <li>Cool stuff</li>
            <li>Fast Response</li>
            <li>Shopping Cart</li>
            <li>Easy to Use</li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Company</h5>
          <ul class="list-unstyled text-small">
            <li>Universitas Multimedia Nusantara</li>
            <li>Serpong, Tangerang</li>
            <li>Indonesia</li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Team</h5>
          <ul class="list-unstyled text-small">
          <li>Juan</li>
          <li>Randy Hanjaya</li>
          <li>Richard Alvin.P</li>
          <li>Sion Theodorus.S.D </li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About Us</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="<?= base_url('index.php/aboutus/user') ?>">About</a></li>
          </ul>
        </div>
      </div>
    </footer>

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
