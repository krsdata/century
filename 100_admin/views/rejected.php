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
        Reject List
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
              <h3 class="box-title">Rejected Users</h3>
            </div>
            <!-- /.box-header -->
			<?php
			require_once "../db/config.php";
			$sql = "SELECT * FROM API_user_account join user on API_user_account.usr_id=user.email join wallet1 on API_user_account.usr_id=wallet1.userid WHERE usr_paytm_isVarified='3' OR usr_bank_isVarified='3'";
			$result = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($result);
			?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#No.</th>
                  <th>Pan Detail</th>
                  <th>Bank Detail</th>
                  <th>Paytm</th>
                  <th>UserID</th>
                  <th>Email</th>
                  <th>Wamount</th>
				  <th>Remark</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$i=1;
				while($rows = mysqli_fetch_array($result))
				{
					$usr_id = $rows['usr_id'];
					$usr_pan_image = $rows['usr_pan_image'];
					$usr_bank_proofImage = $rows['usr_bank_proofImage'];
					
					/*$sql0 = "SELECT * FROM user WHERE `email` = '$usr_id'";
					$result0 = mysqli_query($conn,$sql0);
					$row0 = mysqli_fetch_assoc($result0);*/
					?>
					<tr>
					  <td><?php echo $i;?></td>
					  <td>
					  	<div class="btn-group">
		                  <button type="button" class="btn btn-info btn-flat">Pan Detail</button>
		                  <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
		                    <span class="caret"></span>
		                    <span class="sr-only">Toggle Dropdown</span>
		                  </button>
		                  <ul class="dropdown-menu" role="menu">
		                    <li><a href="#">Name: <b><?php echo $rows['usr_pan_name'];?></b></a></li>
		                    <li><a href="#">PanN: <b><?php echo $rows['usr_pan_number'];?></b></a></li>
		                    <li class="divider"></li>
		                    <li><?php echo '<img src="https://matchonsports.com/app_code/assets/Proofs/'.$usr_pan_image.'" width=500px;/>';?></li>
		                  </ul>
		                </div>
					  </td>
					  <td>
					  	<div class="btn-group">
		                  <button type="button" class="btn btn-info btn-flat">Bank Detail</button>
		                  <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
		                    <span class="caret"></span>
		                    <span class="sr-only">Toggle Dropdown</span>
		                  </button>
		                  <ul class="dropdown-menu" role="menu">
		                    <li><a href="#">Name: <b><?php echo $rows['usr_bank_acHolderName'];?></b></a></li>
		                    <li><a href="#">Bank: <b><?php echo $rows['usr_bank_name'];?></b></a></li>
		                    <li><a href="#">AcNo: <b><?php echo $rows['usr_bank_acNumber'];?></b></a></li>
		                    <li><a href="#">IFSC: <b><?php echo $rows['usr_bank_ifsc'];?></b></a></li>
		                    <li class="divider"></li>
		                    <li><?php echo '<img src="https://matchonsports.com/app_code/assets/Proofs/'.$usr_bank_proofImage.'" width=500px;/>';?></li>
		                  </ul>
		                </div>
					  </td>
					  <td><?php echo $rows['usr_paytm_number'];?></td>
					  <td><?php echo $rows['usr_id'];?></td>
					  <td><?php echo $rows['email1'];?></td>
					  <td><?php echo $rows['wamount'];?></td>
					  <td><?php echo $rows['usr_act_remark'];?></td>
					  <?php
					  /*if($rows['mat_isVisible'] == '2')
					  {
						  ?>
						  <form action="../code/match_active" method="post">
						  <input type="hidden" name="mat_id" value="<?php echo $rows['mat_id'];?>">
						  <input type="hidden" name="status" value="0">
						  <input type="hidden" name="link" value="match_upcoming">
						  <td><button type="submit" class="btn btn-block btn-success">Active</button></td>
						  </form>
						  <?php
					  }else if($rows['mat_isVisible'] == '0')
					  {
						  ?>
						  <form action="../code/match_active" method="post">
						  <input type="hidden" name="mat_id" value="<?php echo $rows['mat_id'];?>">
						  <input type="hidden" name="status" value="1">
						  <input type="hidden" name="link" value="match_upcoming">
						  <td><button type="submit" class="btn btn-block btn-danger">Inactive</button></td>
						  </form>
						  <?php
					  }*/
					  ?>
					  
					</tr>
					<?php
					$i++;
				}
				mysqli_close($conn);
				?>
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
