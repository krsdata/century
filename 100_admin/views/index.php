<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MatchOnSports</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include('header.php');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Users Details
      </h1>
    </section>

    <?php
    require_once "../db/config.php";
    $sql = "SELECT count(*) as total from user";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_fetch_assoc($result);
    $users = $count['total'];

    $sql1 = "SELECT count(*) as total from contests1";
    $result1 = mysqli_query($conn,$sql1);
    $count1 = mysqli_fetch_assoc($result1);
    $contest = $count1['total'];

    $sql2 = "SELECT count(*) as total from API_user_account join user on API_user_account.usr_id=user.email join wallet1 on API_user_account.usr_id=wallet1.userid WHERE usr_paytm_isVarified='2' AND usr_bank_isVarified='2'";
    $result2 = mysqli_query($conn,$sql2);
    $count2 = mysqli_fetch_assoc($result2);
    $verified = $count2['total'];

    $sql3 = "SELECT count(*) as total from API_user_account join user on API_user_account.usr_id=user.email join wallet1 on API_user_account.usr_id=wallet1.userid WHERE usr_paytm_isVarified='1' OR usr_bank_isVarified='1'";
    $result3 = mysqli_query($conn,$sql3);
    $count3 = mysqli_fetch_assoc($result3);
    $pending = $count3['total'];

    $sql4 = "SELECT count(*) as total from API_user_account join user on API_user_account.usr_id=user.email join wallet1 on API_user_account.usr_id=wallet1.userid WHERE usr_paytm_isVarified='3' OR usr_bank_isVarified='3'";
    $result4 = mysqli_query($conn,$sql4);
    $count4 = mysqli_fetch_assoc($result4);
    $rejected = $count4['total'];

    $sql5 = "SELECT count(*) as total from user WHERE status='4'";
    $result5 = mysqli_query($conn,$sql5);
    $count5 = mysqli_fetch_assoc($result5);
    $promoter = $count5['total'];
    mysqli_close($conn);
    ?>
    <!-- Main content -->
    <section class="content">
      <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="users" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total Users</span>
              <span class="info-box-number"><?php echo $users;?></span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="rejected" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Rejected Users</span>
              <span class="info-box-number"><?php echo $rejected;?></span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="verified" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Verified Users</span>
              <span class="info-box-number"><?php echo $verified;?></span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="pending" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pending Usrs</span>
              <span class="info-box-number"><?php echo $pending;?></span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="wallet" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-suitcase"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Wallet</span>
              <span class="info-box-number">Report<?php //echo $verified;?></span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="promoter_report" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Promoter</span>
              <span class="info-box-number"><?php echo $promoter;?></span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <section class="content-header">
      <h1>
        Transaction Detail<br><br>
      </h1>
    </section>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="transactiontyp" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-history"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="white-space: unset;">Transaction With Type</span>
              <span class="info-box-number">Report</span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="withdraw_pending1" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-history"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="white-space: unset;">Transaction Withdraw</span>
              <span class="info-box-number">Report</span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="report" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-history"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="white-space: unset;">User Search</span>
              <span class="info-box-number">Search Report</span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->
      <section class="content-header">
      <h1>
        Cron Links<br><br>
      </h1>
    </section>
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="http://centurysports.in/app_code/fantasyController/getUpcomingMatch" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-external-link-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text" style="white-space: unset;">Get Upcoming Matchs</span>
              <span class="info-box-number">Link</span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
		<div class="col-md-3 col-sm-6 col-xs-12">
          <a href="http://centurysports.in/app_code/FantasyController/getLiveMatch" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-external-link-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Get Live Matchs</span>
              <span class="info-box-number">Link</span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
		<div class="col-md-3 col-sm-6 col-xs-12">
          <a href="http://centurysports.in/app_code/FantasyController/getPlaying11Squad" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-external-link-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Get Playing 11</span>
              <span class="info-box-number">Link</span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
		<div class="col-md-3 col-sm-6 col-xs-12">
          <a href="http://centurysports.in/app_code/FantasyController/decideWinner" target="_blank"><div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-external-link-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Winning Distribute</span>
              <span class="info-box-number">Link</span>
            </div>
            <!-- /.info-box-content -->
          </div></a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row -->
      <!-- Small boxes (Stat box) -->
      <section class="content-header">
      <h1>
        Contest Detail<br><br>
      </h1>
    </section>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $contest;?></h3>

              <p>Total Contest</p>
            </div>
            <div class="icon">
              <i class="fa fa-chain"></i>
            </div>
            <a href="contest" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
