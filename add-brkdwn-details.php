<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
  	$userid=$_SESSION['detsuid'];
    $datebrkdwn=$_POST['date_brkdwn'];
     $location=$_POST['location'];
     $truckdesc=$_POST['truck_desc'];
     $truckco=$_POST['truck_co'];
     $problem=$_POST['problem'];
     $drname=$_POST['dr_name'];
    $query=mysqli_query($con, "insert into tbl_brkdwn_details(UserId,date_brkdwn,location,truck_desc,truck_co,problem,dr_name,reference) value('$userid','$datebrkdwn','$location','$truckdesc','$truckco','$problem','$drname','$reference')");
if($query){
echo "<script>alert('Breakdown Infromation has been successfully added');</script>";
echo "<script>window.location.href='manage-brkdwn-details.php'</script>";
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
	<title>Onroad haulage || Add Details</title>
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
				<li class="active">Breakdown Details</li>
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
									<label>Date of Breakdown</label>
									<input class="form-control" type="date" value="" name="date_brkdwn" required="true">
								</div>
								<div class="form-group">
									<label>Location</label>
									<input type="text" class="form-control" name="location" value="" required="true">
								</div>
								<div class="form-group">
									<label>Truck Description</label>
									<input type="text" class="form-control" name="truck_desc" value="" required="true">
								</div>
								<div class="form-group">
									<label>Truck Company</label>
									<input type="text" class="form-control" name="truck_co" value="" required="true">
								</div>
								<div class="form-group">
									<label>Problem</label>
									<input type="text" class="form-control" name="problem" value="" required="true">
								</div>
								<div class="form-group">
									<label>Driver's Phone Number</label>
									<input type="number" class="form-control" name="dr_name" value="" required="true">
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