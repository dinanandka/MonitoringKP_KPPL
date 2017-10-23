<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISFOR KP - Admin Dashboard</title>
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
      <li class="active">
        <a href="<?php echo base_url()."index.php/c_admin/index" ?>"><svg class="glyph stroked dashboard-dial"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a>
      </li>
      <li>
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
          <a href="#"><svg class="glyph stroked home"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-home"></use></svg></a>
        </li>
        <li class="active">Dashboard</li>
      </ol>
    </div>
    <!--/.row-->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
      </div>
    </div>
    <!--/.row-->
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-red panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left"> <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg> </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">24</div>
              <div class="text-muted">New Activity</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left"> <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg> </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">120</div>
              <div class="text-muted">Mahasiswa</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.row-->
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>New Activity</h4>
            <div class="easypiechart" id="easypiechart-red" data-percent="24"><span class="percent">24%</span> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Mahasiswa</h4>
            <div class="easypiechart" id="easypiechart-teal" data-percent="80"><span class="percent">80%</span> </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.row-->
    <!--/.row-->
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
    $('#calendar').datepicker({
        });
    
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
