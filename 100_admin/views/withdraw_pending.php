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
  <script>
    function generateCSV(){
       window.location="generateCSVpage.php";
    }
   
</script>      
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
        Withdraw Pending List <button type="button" class="btn bg-purple btn-flat margin" onclick="generateCSV()">Download</button>
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
              <h3 class="box-title">Withdraw Pending</h3>
            </div>
            <!-- /.box-header -->
			<?php
			require_once "../db/config.php";
			$sql = "SELECT * FROM transaction where `date1` > '2019-09-01 00:00:00' and `type` = 'withdraw' and `contestid` = '0' order by date1";
			$result = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($result);
			?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#No.</th>
                  <th>UserID</th>
                  <th>EmailID</th>
                  <th>Type</th>
                  <th>Detail</th>
        				  <th>Paytm</th>
        				  <th>Amount</th>
        				  <th>Date</th>
        				  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$i=1;
        $total_amount = 0;
				while($rows = mysqli_fetch_array($result))
				{
					$userid = $rows['userid'];
					$sql0 = "SELECT * FROM API_user_account WHERE `usr_id` = '$userid'";
					$result0 = mysqli_query($conn,$sql0);
					$row0 = mysqli_fetch_assoc($result0);
					$amount3='Name:'.$row0['usr_bank_acHolderName'].' '.'Account Number:'.$row0['usr_bank_acNumber'].' '.'Bank Name:'.$row0['usr_bank_name'].' '.'IFSC:'.$row0['usr_bank_ifsc'].' '.'Type:'.$row0['usr_bank_acType'];
    				$trans345= $row0['usr_paytm_number'];

					$sql1 = "SELECT email1,mobile FROM user WHERE `email` = '$userid'";
					$result1 = mysqli_query($conn,$sql1);
					$row1 = mysqli_fetch_assoc($result1);

          $total_amount = $total_amount + $rows['amount'];
					?>
					<tr>
					  <td><?php echo $i;?></td>
					  <td><?php echo $rows['userid'];?></td>
					  <td><?php echo $row1['email1'];?></td>
            <?php
            if ($rows['withdraw_type'] == 'PAYTM') {
              ?>
              <td><?php echo $rows['withdraw_type'];?></td>
              <?php
            }else{
              ?>
              <td style="color: red;"><?php echo $rows['withdraw_type'];?></td>
              <?php
            }
            ?>
					  
					  <td><?php echo $amount3;?></td>
					  <td><?php echo $trans345;?></td>
					  <td><?php echo $rows['amount'];?></td>
					  <td><?php echo $rows['date1'];?></td>
					  <td>
					  	<form action="../code/withdraw" method="post">
						  <input type="hidden" name="usr_id" value="<?php echo $rows['userid'];?>">
              <input type="hidden" name="amount" value="<?php echo $rows['amount'];?>">
              <input type="hidden" name="date1" value="<?php echo $rows['date1'];?>">
              <input type="hidden" name="email" value="<?php echo $row1['email1'];?>">
			  <input type="hidden" name="mobile" value="<?php echo $row1['mobile'];?>">
						  <input type="hidden" name="link" value="withdraw_pending">
						  <select name="status" required="">
					  			<option value="">Select</option>
					  			<option value="2">Withdraw</option>
					  			<option value="3">Reject</option>
                    			<option value="4">Refund</option>
					  		</select>
                <select name="BANK" required="">
                  <option value="">Select</option>
                  <option value="P">PAYTM</option>
                  <option value="A">ACCOUNT</option>
                  <option value="N">N/A</option>
                </select>
						  <button type="submit" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; return confirm('Are you sure?');" class="btn btn-block btn-success" >Submit</button>
						</form>
						<!-- <form action="../code/reject" method="post">
						  <input type="hidden" name="usr_id" value="<?php echo $rows['usr_id'];?>">
						  <input type="hidden" name="email" value="<?php echo $rows['email1'];?>">
						  <input type="hidden" name="status" value="3">
						  <input type="hidden" name="link" value="pending">
						  <button type="submit" class="delete-team" onclick="return confirm('Do you want to Reject.');" ><i class="fa fa-close"></i></button>
						</form> -->
					  </td>
					</tr>
					<?php
					$i++;
				}
				mysqli_close($conn);
				?>
        <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th style="color: red;">Total</th>
                  <th style="color: red;"><?php echo $total_amount;?></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>
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
