<?php 
session_start();
if( !isset($_SESSION['MM_Username']) ) {
  
}

require_once('Connections/koneksi.php'); ?>
<!DOCTYPE html>
<html id="home">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIZKY COM CELL</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link href="assets/plugins/jquery-ui.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="assets/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="assets/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="assets/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="assets/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="assets/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
<style type="text/css">
    #datepicker{
        float: right;
        right: 30px;
        position: absolute;
    }
  .page-header{
    height: 50px;
  }
 
.left{
        margin-left: -14px;
        width: 920px;
        height: 800px;
        float: left;
        position: absolute;
        border-radius: 8px 8px 8px 8px;
        background-color: #fff;
        padding: 50px 30px;
        
        
    }
.pra{
    text-indent: 30px;
}
</style>
</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                </button>
                <a class="navbar-brand fa" href="index.php">
                   <h2> Aplikasi Inventaris <p>Pengelolaan Barang</p></h2>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>     
                        </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                    
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i>Logout</a>             
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <div id="nav">
        <nav class="navbar-default navbar-static-side"  role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/lgj.pg" alt=""> </div>
                            <div class="user-info">
                                <div> RIZKY COM CELL</div>
                                <div class="alamat">Jl.lintas Sumbersari </div>                              
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                     <li>
                        <a href="index.php"><i class="fa fa-desktop fa-fw"></i> Home </a></li>
                     <li>
                       <a href="pegawai/index.php"><i class="fa fa-truck fa-fw"></i> Pegawai </a></li>
                    <li>
                       <a href="supplier/index.php"><i class="fa fa-truck fa-fw"></i> Supplier </a></li>
                     <li>
                        <a href="barang/index.php"><i class="fa fa-briefcase fa-fw"></i> Barang </a></li>
                     <li>
                       <a href="gudang/index.php"><i class="fa fa-truck fa-fw"></i> Gudang </a></li>
                     <li>
                        <a href="transaksi/index.php"><i class="fa fa-share fa-fw"></i> Transaksi </a></li>
                  
            
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        </div>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <div class="page-header"></div>
                </div>
                 <!-- end  page header -->
            </div>
           <div class="panel-body">
           <div class="left">
                <div class="alert alert-dismissable text-center">                            
                            </div>
          <span class="text-center">
 <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="supplier/index.php">
        <img src="img/supplier.png" alt="Lights" style="width:50%">
        <div class="caption">
          <p>Supplier</p>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail">
      <a href="barang/index.php">
        <img src="img/barang.png" alt="Lights" style="width:50%">
        <div class="caption">
          <p>Barang</p>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail">
      <a href="gudang/index.php">
        <img src="img/barangmasuk.png" alt="Lights" style="width:50%">
        <div class="caption">
          <p>Gudang</p>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail">
      <a href="pinjambarang/index.php">
        <img src="img/pinjambarang.png" alt="Lights" style="width:50%">
        <div class="caption">
          <p>Transaksi</p>
        </div>
      </a>
    </div>
  </div>

    <div class="col-md-4">
    <div class="thumbnail">
      <a href="keluarbarang/index.php">
        <img src="img/pegawai.jpg" alt="Lights" style="width:50%">
        <div class="caption">
          <p>Pegawai</p>
        </div>
      </a>
    </div>
  </div>
</div>



<a class="quick-button metro black span2"> </a></div>
</div>
           <div id="datepicker"></div>      
        </div>
        <!-- end page-wrapper -->

    </div>    

    <!-- end wrapper -->

    <!-- footer -->
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; Copyright 2019 | By RINI SUSILAWATI</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- akhir footer -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/plugins/jquery-ui.js"></script>

    
    <script type="text/javascript">
    $( "#datepicker" ).datepicker({
        inline: true
    });
    </script>

</body>

</html>
