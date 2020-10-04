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
  <!-- daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
  <style>
	table {
    border: 1px solid red;
	}

	td span:last-child{
			float:right;
	}
	</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include("header.php");?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("sidebar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transaction Report With Type
        <small></small>
      </h1>
      <!--<ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>-->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Report</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
            require_once "../db/config.php";
            $sql = "SELECT distinct type FROM transaction";
            $result = mysqli_query($conn,$sql);
            ?>
            <form role="form" action="" method="post" autocomplete="off">
              <input type="hidden" name="mat_id" value="<?php echo $_REQUEST['mat_id'];?>">
              <div class="box-body">
      			  <div class="row">
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Type</label>
                        <!-- <input type="number" name="amount" class="form-control" placeholder="Amount" required=""> -->
                        <select class="form-control" name="type">
                          <?php
                          while($rows = mysqli_fetch_array($result))
                          {
                            $ttr=$rows['type'];
                            echo '<option value="'.$ttr.'">'.$ttr.'</option>';
                          }
                          ?>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">From Date(YYYY-MM-DD)</label>
                        <!-- <input type="text" name="amount" class="form-control" placeholder="" id="datemask"> -->
                        <input type="text" name="date" class="form-control" id="datepicker" value="<?php echo date("m/d/Y");?>">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">To Date(YYYY-MM-DD)</label>
                        <!-- <input type="text" name="amount" class="form-control" placeholder="" id="datemask"> -->
                        <input type="text" name="date1" class="form-control" id="datepicker1" value="<?php echo date("m/d/Y");?>">
                      </div>
      				</div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
              </form>
				<?php
        if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["username"] != ""){
          $type = $_POST['type'];
          $date = $_POST['date'];
          $date = date("Y-m-d", strtotime($date));
          $date1 = $_POST['date1'];
          $date1 = date("Y-m-d", strtotime($date1));
          if ($date == '' || $date == NULL || $date1 == '' || $date1 == NULL) {
            $sql = "SELECT transaction.userid,transaction.amount,transaction.type,transaction.contestid,transaction.date1,user.email1,user.username,user.password FROM transaction join user on transaction.userid=user.email where `type`='$type' order by transaction.date1 desc";
          }else{
            $date = $date.' 00:00:00.000000';
            $date1 = $date1.' 00:00:00.000000';
            $sql = "SELECT transaction.userid,transaction.amount,transaction.type,transaction.contestid,transaction.date1,user.email1,user.username,user.password FROM transaction join user on transaction.userid=user.email where `type`='$type' and transaction.date1 BETWEEN '$date' AND '$date1' order by transaction.date1 desc";
          }
          $result = mysqli_query($conn,$sql);
        ?>
        <div class="row">
                  <div class="col-md-12">
					  <label for="exampleInputEmail1">Report</label>
					  <table id="" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>UesrID</th>
                  <th>Uesrname</th>
				  <th>Password</th>
                  <th>Email</th>
                  <th>Amount</th>
                  <th>Type</th>
                  <th>ContestID</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>
        <?php
        $i=1;
        $amt=0;
        while($rows = mysqli_fetch_array($result))
        {
          ?>
          
          <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $rows['userid'];?></td>
            <td><?php echo $rows['username'];?></td>
			<td><?php echo $rows['password'];?></td>
            <td><?php echo $rows['email1'];?></td>
            <td><?php echo $amount=$rows['amount'];?></td>
            <td><?php echo $rows['type'];?></td>
            <td><?php echo $rows['contestid'];?></td>
            <td><?php echo $rows['date1'];?></td>
          </tr>
          
          <?php
          $amt = $amt + $amount;
          $i++;
        }
        mysqli_close($conn);
        $number = $amt;
   $no = floor($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
        ?>
        <tfoot>
          <th>
            <td colspan="2"><b>Total</b></td>
            <td><b><?php echo $amt;?></b></td>
            <td colspan="3"><b><?php echo $result;?></b></td>
          </th>
        </tfoot>
                </tbody>
                
              </table>
					</div>
					</div>
          <?php
        }
        ?>
				
              </div>
              <!-- /.box-body -->
			
          </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
      </div>
      <!-- /.box -->

      <div class="row">
        
      </div>
      <!-- /.row -->

    </section>
	<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- /.box -->

      <div class="row">
        
      </div>
      <!-- /.row -->

    </section> 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php");?>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    $('#datepicker1').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>
