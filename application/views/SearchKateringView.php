<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets_main/img/logo.png" />
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets_main/img/logo.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Katering</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!-- Bootstrap core CSS     -->
  <link href="<?php echo base_url();?>assets_main/css/bootstrap.min.css" rel="stylesheet" />

  <!--  Material Dashboard CSS    -->
  <link href="<?php echo base_url();?>assets_main/css/material-dashboard.css" rel="stylesheet"/>

  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="<?php echo base_url();?>assets_main/css/demo.css" rel="stylesheet" />

  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

  <div class="wrapper">

    <div class="sidebar" data-color="purple" data-image="<?php echo base_url();?>assets_main/img/sidebar-1.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

      Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo">
      <a href="<?php echo base_url('index.php/dashboard');?>" class="simple-text">
        <?php echo $this->session->userdata('nama_admin')?>
      </a>
    </div>

    <div class="sidebar-wrapper">
      <ul class="nav">
        <li  class="active">
          <a href="<?php echo base_url();?>katering">
            <i class="material-icons">local_dining</i>
            <p>Katering</p>
          </a>
        </li>
        <li>
					<a href="<?php echo base_url();?>pelanggan">
            <i class="material-icons">person</i>
            <p>Pelanggan</p>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>transaksi">
            <i class="material-icons">attach_money</i>
            <p>Transaksi</p>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url(); ?>logout">
            <i class="material-icons">assignment_return</i>
            <p>Keluar</p>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-panel">
    <nav class="navbar navbar-transparent navbar-absolute">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#addKateringModal" onclick="generateRandomNoVerification()">
            Tambah Katering
          </button>
        </div>
        <div class="collapse navbar-collapse">


          <form class="navbar-form navbar-right" role="search" action="<?php echo site_url('katering/search');?>" method="post">
            <div class="form-group  is-empty">
              <input type="text" class="form-control" placeholder="Search" name="keyword">
              <span class="material-input"></span>
            </div>
            <button type="submit" class="btn btn-white btn-round btn-just-icon">
              <i class="material-icons">search</i><div class="ripple-container"></div>
            </button>
          </form>
        </div>
      </div>
    </nav>

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header" data-background-color="purple">
                <h4 class="title">Katering</h4>
                <p class="category">Data Semua Katering</p>
              </div>
              <div class="card-content table-responsive">
                <table class="table">
                  <thead class="text-primary">
                    <th>Id Katering</th>
                    <th>Nama Katering</th>
                    <th>Alamat Katering</th>
                    <th>Action</th>
                  </thead>
                  <?php
                  $start = 0;
                  foreach ($list_katering as $katering)
                  {
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $katering->id_katering ?></td>
                        <td><?php echo $katering->nama_katering ?></td>
                        <td><?php echo $katering->alamat ?></td>
                        <td class="td-actions text-right">
                          <?php
                          echo anchor(base_url().'katering/detail/'.$katering->id_katering,'<button type="button" rel="tooltip" title="Read More" class="btn btn-info btn-simple btn-xs">
                          <i class="material-icons">visibility</i>
                          </button>');
                          // echo anchor(base_url().'katering/edit/'.$katering->id_katering,'<button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs">
                          // <i class="material-icons">edit</i>
                          // </button>');
                          ?>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs" data-toggle="modal" data-target="#myModal" onclick="getIdKatering(<?php echo $katering->id_katering ?>)">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                    <?php
                  }
                  ?>
                </table>

              </div>
            </div>
            <div class="text-center">
              <ul class="pagination pagination-info">
                <?php
                echo $this->pagination->create_links();
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container-fluid">

        <p class="copyright pull-right">
          &copy; <script>document.write(new Date().getFullYear())</script> <a href="<?php echo base_url('index.php/dashboard');?>">Porkat Admin</a>, Nicolas Juniar Kurniawan
        </p>
      </div>
    </footer>
  </div>
</div>


<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Peringatan</h4>
      </div>
      <div class="modal-body">
        <p> Apakah anda yakin menghapus katering ini?
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-simple" onclick="deleteKatering()">Ya</button>
        <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Tidak</button>
      </div>
    </div>
  </div>
</div>
<!--  End Modal -->

<!-- Sart Modal -->
<div class="modal fade" id="addKateringModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambahkan Katering</h4>
      </div>
      <div class="modal-body">
        <form id="formAddKatering" action="<?php echo base_url();?>katering/add/no_verifikasi" method="post" enctype="multipart/form-data">
          <input type="text" class="form-control" name="no_verifikasi" id="no_verifikasi" placeholder="Nomor Verifikasi"/>
          <input  type="submit" class="btn btn-primary btn-round pull-right" value="Tambah Katering"/>
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
<!--  End Modal -->

</div>

<script type="text/javascript">

var idKatering;

function getIdKatering(id)
{
  idKatering=id;
}

function generateRandomNoVerification()
{
  document.getElementById("no_verifikasi").value = Math.floor(100000 + Math.random() * 900000);;
}

function deleteKatering()
{
  $.ajax({
    type: "GET",
    url: "<?php echo base_url(); ?>katering/delete/"+idKatering
  }).done(function(message) {
    window.location.href = "<?php echo site_url(); ?>katering";
  });
}

$(document).ready(function(){
  $("#buttonShowModal").click(function(){
      $("#addKateringModal").modal();
   });
});
</script>

</body>

</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url();?>assets_main/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets_main/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets_main/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url();?>assets_main/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>assets_main/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url();?>assets_main/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url();?>assets_main/js/demo.js"></script>

<script type="text/javascript">
$(document).ready(function(){

  // Javascript method's body can be found in assets/js/demos.js
  demo.initDashboardPageCharts();

});
</script>

</html>
