<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISFOR KP - Admin Activity</title>
  <link href="<?php echo base_url() ?>asset_umum/back-end/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset_umum/back-end/css/datepicker3.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset_umum/back-end/css/styles.css" rel="stylesheet">
  <!--Icons-->
  <script src="<?php echo base_url() ?>asset_umum/back-end/js/lumino.glyphs.js"></script>
  <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#"><span>Sisfor </span>KP</a>
        <ul class="user-menu">
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <svg class="glyph stroked male-user">
                <use xlink:href="#stroked-male-user" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
              </svg>
              Hello, <?php echo $this->session->userdata('username') ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="<?php echo site_url('c_admin/logout')?>"><svg class="glyph stroked cancel"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-cancel"></use></svg> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- /.container-fluid -->
  </nav>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
      <li>
        <a href="<?php echo base_url()."index.php/c_admin/index" ?>"><svg class="glyph stroked dashboard-dial"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a>
      </li>
      <li class="active">
        <a href="<?php echo base_url()."index.php/c_admin/activity" ?>"><svg class="glyph stroked table"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-table"></use></svg>&nbsp;Activity</a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/c_admin/mahasiswa" ?>"><svg class="glyph stroked app-window"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-app-window"></use></svg>&nbsp;Mahasiswa</a>
      </li>
      <div class="attribution">
        <p>Copyright &copy; 2017 <br> <a href="http://is.its.ac.id/">Information System Department</a> <br> ITS </p>
      </div>
    </ul>
  </div>
  <!--/.sidebar-->
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li>
          <a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></a>
        </li>
        <li class="active">Activity</li>
      </ol>
    </div>
    <!--/.row-->
    <div class="row">
      <div class="col-lg-12">
        <div class="box">
          <h1>Activity</h1>
          <p class="text-muted">Berikut daftar aktifitas yang dilakukan mahasiswa</p>
          <hr>
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>History</th>
                </tr>
              </thead>
              <tbody>
              <!--
                <form method="post" action="#">
                <?php foreach ($data as $x) { ?>
                <tr>
                  <td><?= $x['tanggal'] ?></td>
                  <td><?= $x['history'] ?></td>
                </tr>
                <?php } ?>
                </form> -->

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!--/.main-->
  <script src="<?php echo base_url() ?>asset_umum/back-end/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url() ?>asset_umum/back-end/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>asset_umum/back-end/js/chart.min.js"></script>
  <script src="<?php echo base_url() ?>asset_umum/back-end/js/chart-data.js"></script>
  <script src="<?php echo base_url() ?>asset_umum/back-end/js/easypiechart.js"></script>
  <script src="<?php echo base_url() ?>asset_umum/back-end/js/easypiechart-data.js"></script>
  <script src="<?php echo base_url() ?>asset_umum/back-end/js/bootstrap-datepicker.js"></script>
  <script>
    !function ($) {
    			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
    				$(this).find('em:first').toggleClass("glyphicon-minus");	  
    			}); 
    			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    		}(window.jQuery);
    
    		$(window).on('resize', function () {
    		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    		})
    		$(window).on('resize', function () {
    		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    		})
  </script>
</body>

</html>