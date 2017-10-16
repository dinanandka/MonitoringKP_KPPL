<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISFOR KP - Dosen Activity</title>
  <link href="<?php echo base_url() ?>asset_umum/back-end/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset_umum/back-end/css/datepicker3.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset_umum/back-end/css/bootstrap-table.css" rel="stylesheet">
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
              Welcome, <?php echo $this->session->userdata('username') ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="<?php echo site_url('c_dosen/logout')?>"><svg class="glyph stroked cancel"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-cancel"></use></svg> Logout</a>
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
        <a href="<?php echo base_url()."index.php/c_dosen/index" ?>"><svg class="glyph stroked dashboard-dial"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a>
      </li>
      <li>
        <a href="<?php echo base_url()."index.php/c_dosen/laporan" ?>"><svg class="glyph stroked app-window"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-app-window"></use></svg>&nbsp;Laporan</a>
      </li>
      <li class="active">
        <a href="<?php echo base_url()."index.php/c_dosen/activity" ?>"><svg class="glyph stroked table"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-table"></use></svg>&nbsp;Activity</a>
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
        <li class="active">Activity</li>
      </ol>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Activity ?</h1>
      </div>
    </div>
    <!--/.row-->
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left"> <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg> </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">52</div>
              <div class="text-muted">Comments</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left"> <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user" xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg> </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <div class="large">24</div>
              <div class="text-muted">New Users</div>
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
            <h4>Comments</h4>
            <div class="easypiechart" id="easypiechart-orange" data-percent="65"><span class="percent">65%</span> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>New Users</h4>
            <div class="easypiechart" id="easypiechart-teal" data-percent="56"><span class="percent">56%</span> </div>
          </div>
        </div>
      </div>
    </div>
    <!--/.row-->
    <div class="row">
      <!--/.col-->
      <div class="col-md-6">
        <div class="panel panel-blue">
          <div class="panel-heading dark-overlay"><svg class="glyph stroked clipboard-with-paper"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-clipboard-with-paper"></use></svg>To-do List</div>
          <div class="panel-body">
            <ul class="todo-list">
              <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" value="on"> <label for="checkbox">Make a plan for today</label> </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
              <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" value="on"> <label for="checkbox">Update Basecamp</label> </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
              <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" value="on"> <label for="checkbox">Send email to Jane</label> </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
              <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" value="on"> <label for="checkbox">Drink coffee</label> </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
              <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" value="on"> <label for="checkbox">Do some work</label> </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
              <li class="todo-list-item">
                <div class="checkbox">
                  <input type="checkbox" id="checkbox" value="on"> <label for="checkbox">Tidy up workspace</label> </div>
                <div class="pull-right action-buttons">
                  <a href="#"><svg class="glyph stroked pencil"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-pencil"></use></svg></a>
                  <a href="#" class="flag"><svg class="glyph stroked flag"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-flag"></use></svg></a>
                  <a href="#" class="trash"><svg class="glyph stroked trash"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#stroked-trash"></use></svg></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="panel-footer">
            <div class="input-group">
              <input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task"> <span class="input-group-btn">
                <button class="btn btn-primary btn-md" id="btn-todo">Add</button>
              </span> </div>
          </div>
        </div>
      </div>
      <!--/.col-->
    </div>
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
  <script src="<?php echo base_url() ?>asset_umum/back-end/js/bootstrap-table.js"></script>
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