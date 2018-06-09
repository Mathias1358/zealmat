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


<?php
 include '../functions/db.php';

extract($_POST);


$sql = "INSERT INTO `football_register` (`Username`, `First_Name`, `Last_Name`,`Weight`, `Height`, `Gender`,`Nationality`, `Marital_Status`, `Residential_Address`
,`Email`, `Telephone_Number`, `Parent_Address`,`Phone_Number`, `Period`, `fracture/dislocation`
,`Reason1`, `Ailment`, `Reason2`, `Health_Isurance`, `Imaage`, `userid`) VALUES ('$username','$fname','$lname','$weight','$height','$gender','$nation','$marital','$resident',
'$email','$tnumber','$paddress','$phonenum','$input','$first','$second','$third','$fourth','$fifth','$image','$userid')";
$result = mysql_query($sql);

 
			
			if($result==true)
                            {
                                   echo '<script language="javascript">';
                                    echo 'alert("Successfully Registered")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=../index1.php" />';
                            }

		
			
		
	




?>