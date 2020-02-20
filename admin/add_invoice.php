<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  }
//check if not invoiced or not
$sql=mysqli_query($conn,"select * from tbl_invoice where reference='$reference'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>Already Invoiced</font>";
}
   else{

if(isset($_POST['submit']))
  {
     $reference=$_POST['reference'];
     $job_done=$_POST['job_done'];
     $amount=$_POST['amount'];
     $mechanics_name=$_POST['mechanics_name'];
     $invoiced_to=$_POST['invoiced_to'];

    $query=mysqli_query($con, "insert into tbl_invoice(reference,job_done,amount,mechanics_name,UserID) value('$reference','$job_done','$amount','$mechanics_name','$invoiced_to')");
if($query){
echo "<script>alert('Invoice Infromation has been successfully added');</script>";
echo "<script>window.location.href='view_invoices.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}
  
}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Onroad Haulage | Add Invoice</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include_once('includes/header.php');?>
	<?php include_once('includes/sidebar.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Breakdown Invoice</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Breakdown Details</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<div class="col-md-12">
							
							<form role="form" method="post" action="">
								
								<div class="form-group">
									<label>Reference Number</label>
									<input type="text" class="form-control" name="reference" placeholder="Refer to The breakdown details send" value="" required="true">
								</div>
								<div class="form-group">
									<label>Job Done</label>
									<input type="text" class="form-control" name="job_done" value="" required="true">
								</div>
								<div class="form-group">
									<label>Amount</label>
									<input type="number" class="form-control" name="amount" value="" required="true">
								</div>
								<div class="form-group">
									<label>Mechanics Name</label>
									<input type="text" class="form-control" name="mechanics_name" value="" required="true">
								</div>
								<div class="form-group">
									<label>Invoiced To</label>
									<input type="number" class="form-control" name="invoiced_to" placeholder="Enter a valid UserID" value="" required="true">
								</div>


								
																
								<div class="form-group has-success">
									<button type="submit" class="btn btn-primary" name="submit">Add</button>
								</div>
								
								
								</div>
								
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include_once('includes/footer.php');?>
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
<?php }  ?>