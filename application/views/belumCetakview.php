<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin - SEP</title>
  <!-- Bootstrap core CSS-->
  <link href="style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="style/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="style/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Admin - SEP</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="home">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Beranda</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="belumCetak">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">File Belum di Cetak</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="sudahCetak">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">File Sudah di Cetak</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Keluar</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Beranda</a>
        </li>
        <li class="breadcrumb-item active">File Belum di Cetak</li>
      </ol>
      <!-- Area Chart Example-->
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No. Berkas</th>
                  <th>Layanan</th>
                  <th>Pengguna</th>
                  <th>Tinta</th>
                  <th>Status</th>
                  <th>Kertas</th>
                  <th>Berkas</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Komentar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($hasil as $row){ ?>
                <tr>
                  <?php $this->id = $row['ID_CETAK'];?>
                  <td><?php echo $row['ID_CETAK']; ?></td>
                  <td><?php echo $row['NAMA_LAYANAN']; ?></td>
                  <td><?php echo $row['NAMA_LENGKAP']; ?></td>
                  <td><?php echo $row['JENIS_TINTA']; ?></td>
                  <td><?php echo $row['NAMA_STATUS']; ?></td>
                  <td><?php echo $row['JENIS_KERTAS']; ?></td>
                  <td><?php echo $row['BERKAS']; ?></td>
                  <td><?php echo $row['JUMLAH_LEMBAR']; ?></td>
                  <td><?php echo $row['TOTAL_HARGA']; ?></td>
                  <td><?php echo $row['KOMENTAR']; ?></td>
                  <td><button class="btn btn-primary btn-block"><?php echo "<a style='color:white' href='belumCetak/lihatFile/".$this->id."'>Cetak</a>"?></button>
                  <button class="btn btn-success btn-block"><?php echo "<a style='color:white' href='belumCetak/selesaiCetak/".$this->id."'>Selesai</a>"?></button>
                  </td>
                </tr>
                <?php }; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Diperbarui Pada</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>SEP 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Keluar</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Apakah anda yakin ingin keluar?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="login/logout">Keluar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="style/vendor/jquery/jquery.min.js"></script>
    <script src="style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="style/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="style/vendor/chart.js/Chart.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="style/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="style/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
