
<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$username=$_SESSION['username'];
$userid = $_SESSION['user_Id'];

?>
<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<style>
#move{
	position:relative;
	left: -310px;
top :30px;

}
h3 {
    font-size: 18px;
}
</style>
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"></a>
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">CSIT FORUM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">

               
     				
					 <ul class="nav navbar-nav navbar-right">
                         <li><a href="#" ><span class="glyphicon glyphicon-user"></span> <?php echo $username;?></a></li>
                        <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                
                </ul>		
			
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
      
    </nav>
	<!-- Navigation -->
   

                
            </div>
            <!-- /.navbar-collapse -->
       
    </nav>
			<div class="container" style="margin:8% auto;">
				
				 <div class="col-sm-9 col-md-5 pull-right">
				
                   <div class="row">
                   <div id="move">
				    <div class="panel panel-success">
                    <div class="panel-heading">
						<form method="POST" class="form-signin" action="registrationform.php">
								<h3 class="text-center">Personal Data</h3>
							<input type="text" name="fname"placeholder="Players First Name"class="form-control" required><BR><br>
							<input type="text" name="lname"placeholder="Players Last Name"class="form-control" required><BR><br>
							<input type="number" name="weight"placeholder="Weight"class="form-control" required><BR>
							<input type="number" name="height"placeholder="Height"class="form-control" required><BR>
							<select class="form-control" name="gender"required><BR>
								<option>Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
								<BR>
							<input type="text" placeholder="Nationality" name="nation"class="form-control" required><BR><br>
							<select class="form-control" name="marital"required><BR>
								<option>Marital Status</option>
								<option value="Male">Married</option>
								<option value="Female">Single</option>
							</select>
							<br>
							<hr>
							<h3 class="text-center">Contact Address</h3>
							<input type="text" name="resident"placeholder="Resident Address"class="form-control" required><BR><br>
							
							<input type="email" placeholder="Email Address" name="email"class="form-control" required><BR>
							<input type="text" placeholder="Telephone Number" name="tnumber" class="form-control" required><BR><br>
							<input type="text" placeholder="Parent Office Address" name="paddress"class="form-control" required><BR><br>
							<input type="text" placeholder="Phone Number" name="phonenum" class="form-control" required><BR><br>
							<br>
							<hr>
								<h3 class="text-center" >Input The Programme Of Your Choice[Full Time,Part Time,Holiday,Weekend]</h3>
							<input type="text" placeholder="Input One Only" name="input" class="form-control" required><BR><br>
								<br>
								<hr>
								<h3 class="text-center">Medical Record</h3><br>
									<b>Do you have any fracture,desolocation or Broken Bones Before<b><select class="form-control" name="first"required>
								<option></option>
								<option value="Male">Yes</option>
								<option value="Female">No</option>
							</select>
							<br>
							If yes which part <input type="text" placeholder="Which Part" name="second" class="form-control">
							<br><br>
										<b>Do you have any Fracture special Ailment or Sickness<b><select class="form-control" name="third"required>
								<option></option>
								<option value="Male">Yes</option>
								<option value="Female">No</option>
							</select>
							<br>
							If yes state it <input type="text" placeholder="State It" name="fourth" class="form-control">
							<br>
							<br>
								
										<b>Do you have Live or Health Insurance<b><select class="form-control" name="fifth"required>
								<option></option>
								<option value="Male">Yes</option>
								<option value="Female">No</option>
							</select>
								<br>
							<br>
							
                        <label>Upload Image</label>
                        <input type="file" class="form-control" name="image"required>
                       
                       
                       <br>
							<input type="submit" value="Register" class="btn btn-success" style="width:100%;">
							<hr>
						</form>
						</div>
				</div>
			</div>
					</div>
				</div>
			</div>
		</div>

</body>
</html>