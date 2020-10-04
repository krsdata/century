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
  
	<script type="text/javascript">
    function checkAll(checkId){
        var inputs = document.getElementsByTagName("input");
        for (var i = 0; i < inputs.length; i++) { 
            if (inputs[i].type == "checkbox" && inputs[i].id == checkId) { 
                if(inputs[i].checked == true) {
                    inputs[i].checked = false ;
                } else if (inputs[i].checked == false ) {
                    inputs[i].checked = true ;
                }
            }  
        }  
    }
	</script>
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
        Grand League
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
              <h3 class="box-title">Edit</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
            require_once "../db/config.php";
            $mat_id = $_REQUEST['mat_id'];
            $contests_id = $_REQUEST['contests_id'];
            $sql = "SELECT amount,no_of_teams,fee FROM contests WHERE type='1' AND matchid='$mat_id'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            $sql1 = "SELECT * FROM prize WHERE contestid='$contests_id'";
            $result1 = mysqli_query($conn,$sql1);
            ?>
            <form role="form" action="../code/edit_grand_league" method="post" autocomplete="off">
              <input type="hidden" name="mat_id" value="<?php echo $_REQUEST['mat_id'];?>">
              <input type="hidden" name="contests_id" value="<?php echo $_REQUEST['contests_id'];?>">
              <div class="box-body">
      			  <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Amount</label>
                        <input type="number" name="amount" class="form-control" placeholder="Amount" required="" value="<?php echo $row['amount'];?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">No of Teams</label>
                        <input type="number" name="teams" class="form-control" placeholder="No of Teams" required="" value="<?php echo $row['no_of_teams'];?>">
                      </div>
      				</div>
              <div class="row">
                      <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Fees</label>
                        <input type="number" name="fees" class="form-control" placeholder="Fees" required="" value="<?php echo $row['fee'];?>">
                      </div>
              </div>
				<div class="row">
                  <div class="col-md-12">
					  <label for="exampleInputEmail1">Prize Breakup</label>
					  <table id="tableID1" class="table table-bordered table-striped">
							<thead>
							<tr>
							  <!-- <th><i class="fa fa-plus" style="color:#3c8dbc" onclick="addRow1('dataTable1')"></i>&nbsp;&nbsp;<i class="fa fa-minus" style="color:#dd4b39" onclick="deleteRow1('dataTable1')"></i></th> -->
                <th>No#</th>
							  <th>Start Rank</th>
							  <th>End Rank</th>
							  <th>Prize Amount</th>
							</tr>
							</thead>
							<tbody id="dataTable1">
								<?php
                $i = 1;
                while ($rows1 = mysqli_fetch_array($result1)) {
                  ?>
                  <tr><input type="hidden" name="prize_id[]" value="<?php echo $rows1['prize_id'];?>">
  								  <!-- <td><INPUT type="checkbox" name="chk[]" id="chk"/></td> -->
                    <td><?php echo $i;?></td>
  								  <td><input type="number" class="form-control" name="start[]" value="<?php echo $rows1['min1'];?>" required=""></td>
  								  <td><input type="number" class="form-control" name="end[]" value="<?php echo $rows1['max1'];?>" required=""></td>
  								  <td><input type="number" class="form-control" name="prize[]" value="<?php echo $rows1['prize'];?>" required=""></td>
  								</tr>
                  <?php
                $i++;}
              ?>
						</tbody>
						<tfoot>
						</tfoot>
					  </table>
					</div>
					</div>
				<div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
              </div>
              </div>
              <!-- /.box-body -->
			</form>
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
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
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
<SCRIPT language="javascript">
	function addRow(tableID) {
		var table = document.getElementById(tableID);
		var rowCount = table.rows.length;
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell	= row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
			//alert(newcell.childNodes);
			switch(newcell.childNodes[0].type) {
				case "text":
						newcell.childNodes[0].value = "";
						break;
				case "checkbox":
						newcell.childNodes[0].checked = false;
						break;
				case "select-one":
						newcell.childNodes[0].selectedIndex = 0;
						break;
			}
		}
	}
	function deleteRow(tableID) {
		try {
		var table = document.getElementById(tableID);
		var rowCount = table.rows.length;
		for(var i=0; i<rowCount; i++) {
			var row = table.rows[i];
			var chkbox = row.cells[0].childNodes[0];
			if(null != chkbox && true == chkbox.checked) {
				if(rowCount <= 1) {
					alert("Cannot delete all the rows.");
					break;
				}
				table.deleteRow(i);
				rowCount--;
				i--;
			}
		}
		}catch(e) {
			alert(e);
		}
	}
	$('#submit').click(function () {
        var valid = true;
        $.each($('input[type="text"]'), function (index1, item1) {
            $.each($('input[type="text"]').not(this), function (index2, item2) {
                if ($(item1).val() == $(item2).val()) {
                    $(item1).css("border-color", "red");
                    valid = false;
                }
            });
        });
        return valid;
    });
	</SCRIPT>
	<SCRIPT language="javascript">
	function addRow1(tableID1) {
		var table = document.getElementById(tableID1);
		var rowCount = table.rows.length;
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell	= row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
			//alert(newcell.childNodes);
			switch(newcell.childNodes[0].type) {
				case "text":
						newcell.childNodes[0].value = "";
						break;
				case "checkbox":
						newcell.childNodes[0].checked = false;
						break;
				case "select-one":
						newcell.childNodes[0].selectedIndex = 0;
						break;
			}
		}
	}
	function deleteRow1(tableID1) {
		try {
		var table = document.getElementById(tableID1);
		var rowCount = table.rows.length;
		for(var i=0; i<rowCount; i++) {
			var row = table.rows[i];
			var chkbox = row.cells[0].childNodes[0];
			if(null != chkbox && true == chkbox.checked) {
				if(rowCount <= 1) {
					alert("Cannot delete all the rows.");
					break;
				}
				table.deleteRow(i);
				rowCount--;
				i--;
			}
		}
		}catch(e) {
			alert(e);
		}
	}
	$('#submit').click(function () {
        var valid = true;
        $.each($('input[type="text"]'), function (index1, item1) {
            $.each($('input[type="text"]').not(this), function (index2, item2) {
                if ($(item1).val() == $(item2).val()) {
                    $(item1).css("border-color", "red");
                    valid = false;
                }
            });
        });
        return valid;
    });
	</SCRIPT>
</body>
</html>
