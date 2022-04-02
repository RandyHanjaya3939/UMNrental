<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <?php echo $css; ?>

    <!-- Custom styles for this template -->
    <?php echo $logincss; ?>
  </head>

  <body class="text-center">
    <form class="user" method="post" action="<?= base_url('index.php/login') ?>">
      <img class="mb-4" src="../assets/pendukung/logo.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please Log in</h1>
      <?= $this->session->flashdata('message')?>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

      <div class="text-center">
          <a class="small" href="<?= base_url('index.php/Login/Registration'); ?>">Create an Account!</a>
      </div>

      <div class="text-center">
          <a class="small" href="<?= base_url('index.php/welcome'); ?>">Go To Home</a>
      </div>

      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    <?php echo $js; ?>
  </body>
</html>
