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
  <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
        Promoter List
      </h1>
	  <?php
	  if($_SESSION['TYPE'] == '1')
	  {
		?>
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-check"></i> Alert!</h4>
			Status change Done!.
		  </div>
		<?php
		$_SESSION['TYPE'] = "";
	  }else if($_SESSION['TYPE'] == '0')
	  {
		?>
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-ban"></i> Alert!</h4>
			Status not change!.
		  </div>
		<?php
		$_SESSION['TYPE'] = "";
	  }
	  ?>
	  
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Promoter</h3>
            </div>
            <!-- /.box-header -->
			<?php
			require_once "../db/config.php";
			$sql = "SELECT * FROM user join refer1 on user.email=refer1.userid WHERE user.status='4'";
			$result = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($result);
			?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#No.</th>
                  <th>UserID</th>
                  <th>Username</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Refferal Code</th>
                  <th>TotalReffral</th>
                  <th>Deposit</th>
                  <th>OwnDeposit</th>
                  <th>Percent</th>
                  <th>Earn Money</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$i=1;
				while($rows = mysqli_fetch_array($result))
				{
					$user_id = $rows['email'];
					$s = "SELECT SUM(amount) AS TotalAmount FROM earn_money_transaction WHERE user_id = '$user_id'";
					$q = mysqli_query($conn,$s);
					$r = mysqli_fetch_assoc($q);
    			$earn = $r['TotalAmount'];

          $sql1 = "SELECT count(*) as total from refer1 WHERE referral_userId = '$user_id'";
          $result1 = mysqli_query($conn,$sql1);
          $count1 = mysqli_fetch_assoc($result1);
          $total = $count1['total'];
          $total1=$total1+$total;

          $sql2 = "SELECT SUM(amount) as total FROM transaction JOIN refer1 ON transaction.userid=refer1.userid WHERE refer1.referral_userId = '$user_id' AND transaction.type = 'deposit'";
          $result2 = mysqli_query($conn,$sql2);
          $count2 = mysqli_fetch_assoc($result2);
          $sum_amount = $count2['total'];
          $sum_amount1 = $sum_amount1+$sum_amount;

          $sql3 = "SELECT SUM(amount) as total FROM transaction WHERE userid = '$user_id' AND type = 'deposit'";
          $result3 = mysqli_query($conn,$sql3);
          $count3 = mysqli_fetch_assoc($result3);
          $sum_prom = $count3['total'];
					?>
					<tr>
					  <td><?php echo $i;?></td>
					  <td><?php echo $rows['email'];?></td>
					  <td><?php echo $rows['username'];?></td>
					  <td><?php echo $rows['mobile'];?></td>
					  <td><?php echo $rows['email1'];?></td>
					  <td><?php echo $rows['refid'];?></td>
            <td><?php echo $total;?></td>
            <td><?php echo $sum_amount;?></td>
            <td><?php echo $sum_prom;?></td>
					  <td><?php echo $rows['percent'];?></td>
					  <td><?php echo $earn;?></td>
					  
					</tr>
					<?php
					$i++;
				}
				mysqli_close($conn);
				?>
        <tr>
            <td></td>
            <td><?php //echo $rows['email'];?></td>
            <td><?php //echo $rows['username'];?></td>
            <td><?php //echo $rows['mobile'];?></td>
            <td><?php //echo $rows['email1'];?></td>
            <td><?php //echo $rows['refid'];?></td>
            <td><?php echo $total1;?></td>
            <td><?php echo $sum_amount1;?></td>
            <td><?php //echo $earn;?></td>
            <td><?php //echo $earn;?></td>
            <td><?php //echo $earn;?></td>
            
          </tr>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
