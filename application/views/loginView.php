<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin - SEP Login</title>
  <!-- Bootstrap core CSS-->
  <link href="style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="style/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="style/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Silahkan Masuk Terlebih Dahulu</div>
      <div class="card-body">
        <form role="form" action="login" method="POST">
          <div class="form-group">
            <input class="form-control" placeholder="Nama Pengguna" name="namaPengguna" type="text" autofocus>
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Kata Sandi" name="kataSandi" type="password" value="">
          </div>
          <div class="form-group">
            <p style="color:red"><?php echo $model->notif;?></p>
          </div>
            <!-- Change this to a button or input when using this as a form -->
          <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" name="btn_log" value="Masuk"/>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="style/vendor/jquery/jquery.min.js"></script>
  <script src="style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="style/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
