
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE')?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE')?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="<?= base_url('AdminLTE')?>/index3.html" class="navbar-brand">
        <span class="brand-text font-weight-light"><i class="fas fa-shopping-cart text-primary"></i><b> Transaksi Penjualan</b></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        
        
        <li class="nav-item">
          <?php if (session()->get('level') == '1') { ?>
            <a class="nav-link" href="<?= base_url('Admin') ?>">
              <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
          <?php } else { ?>
            <a class="nav-link" href="<?= base_url('Home/Logout') ?>">
              <i class="fas fa-sign-in-alt"></i> Logout
            </a>
          <?php } ?>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="row">
          <div class="col-lg-7">

            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label>No Faktur</label>
                            <label class="form-control form-control-lg text-danger"><?= $no_faktur?></label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label>Tanggal</label>
                            <label class="form-control form-control-lg"><?= date('d M Y') ?></label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label>Jam</label>
                            <label class="form-control form-control-lg"><?= date('13:00:00') ?></label>
                        </div>
                    </div>

                    <div class="col-3">
                        <div class="form-group">
                            <label>Kasir</label>
                            <label class="form-control form-control-lg text-primary"><?= session()->get('nama_user')?></label>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5">

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0"></h5>
              </div>
              <div class="card-body bg-black color-palette text-right">
                <label class="display-4 text-green">Rp. 1,500,500,-</label>
              </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-2 input-group">
                                    <input name="kode_produk" class="form-control" placeholder="Barcode/Kode Produk">
                                    <span class="input-group-append">
                                        <button class="btn btn-primary btn-flat">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-danger btn-flat">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </span>
                                </div>
                            
                                <div class="col-3">
                                    <input name="nama_produk" class="form-control" placeholder="Nama Produk">
                                </div>
                                <div class="col-1">
                                    <input name="kategori" class="form-control" placeholder="Kategori">
                                </div>
                                <div class="col-1">
                                    <input name="satuan" class="form-control" placeholder="Satuan">
                                </div>
                                <div class="col-1">
                                    <input name="harga_jual" class="form-control" placeholder="Harga">
                                </div>
                                <div class="col-1">
                                    <input type="number" min="1" value="1" name="qty" class="form-control text-center" placeholder="QTY">
                                </div>
                                <div class="col-3">
                                    <button class="btn btn-flat btn-primary"><i class="fas fa-cart-plus"></i> Add</button>
                                    <button class="btn btn-flat btn-warning"><i class="fas fa-sync"></i> Clear</button>
                                    <button class="btn btn-flat btn-success"><i class="fas fa-cash-register"></i> Bayar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th>Kode/Barcode</th>
                                        <th>Nama Produk</th>
                                        <th>Kategori</th>
                                        <th>Harga Jual</th>
                                        <th width="100px">Qty</th>
                                        <th>Total Harga</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>111111111</td>
                                        <td>Sari Roti</td>
                                        <td>Makanan</td>
                                        <td class="text-right">@ Rp. 15,000,-</td>
                                        <td class="text-center">2 PCS</td>
                                        <td class="text-right">Rp. 30,000,-</td>
                                        <td class="text-center">
                                            <a class="btn btn-flat btn-danger btn-sm"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0"></h5>
              </div>
              <div class="card-body bg-black color-palette text-center">
                <h1 class="text-warning">Satu Juta Lima Ratus Ribu Lima Ratus Rupiah</h1>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('AdminLTE')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('AdminLTE')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('AdminLTE')?>/dist/js/adminlte.min.js"></script>
</body>
</html>
