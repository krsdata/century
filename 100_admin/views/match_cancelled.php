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
        Cancel Match List
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
              <h3 class="box-title">Canceled Matches</h3>
            </div>
            <!-- /.box-header -->
			<?php
			require_once "../db/config.php";
			$sql = "SELECT * FROM API_matches WHERE `mat_status` = '4' ORDER BY `mat_startdate` DESC";
			$result = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($result);
			?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#No.</th>
                  <th>Match Title</th>
                  <th>Short Title</th>
                  <th>Match No</th>
				  <th>Image</th>
                  <th>Format</th>
				  <th>MatchDate</th>
				  <th>MatchStatus</th>
				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$i=1;
				while($rows = mysqli_fetch_array($result))
				{
					if($rows['mat_status'] == 1)
					{
						$mat_status = 'Upcoming';
					}else if($rows['mat_status'] == 2)
					{
						$mat_status = 'Completed';
					}else if($rows['mat_status'] == 3)
					{
						$mat_status = 'Live';
					}
					$mat_comp_id = $rows['mat_comp_id'];
					$teamid1 = $rows['mat_team1_id'];
					$teamid2 = $rows['mat_team2_id'];
					
					$sql0 = "SELECT comp_title FROM API_competition WHERE `comp_id` = '$mat_comp_id'";
					$result0 = mysqli_query($conn,$sql0);
					$row0 = mysqli_fetch_assoc($result0);
					$sql1 = "SELECT team_logo_url FROM API_team WHERE `team_id` = '$teamid1'";
					$result1 = mysqli_query($conn,$sql1);
					$row1 = mysqli_fetch_assoc($result1);
					$sql2 = "SELECT team_logo_url FROM API_team WHERE `team_id` = '$teamid2'";
					$result2 = mysqli_query($conn,$sql2);
					$row2 = mysqli_fetch_assoc($result2);
					?>
					<tr>
					  <td><?php echo $i;?></td>
					  <td><?php echo $rows['mat_title'];?></br>(<?php echo $row0['comp_title'];?>)</td>
					  <td><?php echo $rows['mat_short_title'];?></td>
					  <td><?php echo $rows['mat_sub_title'];?></td>
					  <td><img src="<?php echo $row1['team_logo_url'];?>" style="width: 35px;" >vs<img src="<?php echo $row2['team_logo_url'];?>" style="width: 35px;"></td>
					  <td><?php echo $rows['mat_format'];?></td>
					  <td><?php echo $rows['mat_startdate'];?></td>
					  <td><?php echo $mat_status;?></td>
					  <?php
					  if($rows['mat_isVisible'] == '1' && $rows['mat_isPrizeDesctributed'] == '4')
					  {
						  ?>
						  <td><button type="submit" class="btn btn-block btn-success">Fess Refunded</button>
						  <form action="../code/match_delete" method="post">
						  <input type="hidden" name="mat_id" value="<?php echo $rows['mat_id'];?>">
						  <button type="submit" class="btn btn-block btn-danger" onClick="return confirm('Do you want to Delete.');">Delete</button>
						</form></td>
						  <?php
					  }else if($rows['mat_isVisible'] == '1' && $rows['mat_isPrizeDesctributed'] == '0')
					  {
						  ?>
						  <form action="../code/match_cancel" method="post" onsubmit='disableButton(<?php echo $i;?>)'>
						  <input type="hidden" name="mat_id" value="<?php echo $rows['mat_id'];?>">
						  <input type="hidden" name="status" value="4">
						  <input type="hidden" name="link" value="match_cancelled">
						  <td><button type="submit" class="btn btn-block btn-danger" id='btn<?php echo $i;?>' onClick="return confirm('Do you want to Cancel.');" >ReturnFees</button></td>
						  </form>
						  <?php
					  }else{
						  ?>
						  <td>
						  	<?php
						  if($rows['mat_isVisible'] == '1')
						  {
							  ?>
							  <form action="../code/match_active" method="post">
							  <input type="hidden" name="mat_id" value="<?php echo $rows['mat_id'];?>">
							  <input type="hidden" name="status" value="0">
							  <input type="hidden" name="link" value="match_live">
							  <button type="submit" class="btn btn-block btn-success">Active</button>
							  </form><br>
							  <?php
						  }else if($rows['mat_isVisible'] == '0')
						  {
							  ?>
							  <form action="../code/match_active" method="post">
							  <input type="hidden" name="mat_id" value="<?php echo $rows['mat_id'];?>">
							  <input type="hidden" name="status" value="1">
							  <input type="hidden" name="link" value="match_live">
							  <button type="submit" class="btn btn-block btn-info">Inactive</button>
							  </form><br>
							  <?php
						  } ?>
						  <form action="../code/match_delete" method="post">
						  <input type="hidden" name="mat_id" value="<?php echo $rows['mat_id'];?>">
						  <button type="submit" class="btn btn-block btn-danger">Delete</button>
						</form></td>
						  <?php
					  }
					  ?>
					  
					</tr>
					<?php
					$i++;
				}
				mysqli_close($conn);
				?>
                </tbody>
                <script>
    function disableButton(str) {
        var btn = document.getElementById('btn'+str);
        btn.disabled = true;
    }
</script>
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
