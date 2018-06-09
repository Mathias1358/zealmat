<?php
session_start();
$code_id = $_SESSION['SESS_CODE_NAME'];
if (!$code_id){
header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Registration Portal</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css1/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css1/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css1/style.css" type="text/css" media="all">
<style type="text/css">
table tr td{border-top:1px dashed #999999; border-bottom:1px dashed #999999; padding:10px; color:black; font-size:18px;}
input{width:360px; border:1px solid #CCCCCC; padding:4px; height:20px;}
input:hover{width:360px; border:1px solid #0066FF; padding:4px; height:20px; box-shadow:1px 1px 14px blue;}
select{width:130px; border:1px solid #CCCCCC; padding:4px; height:35px;}
.loc select{width:170px; border:1px solid #CCCCCC; padding:4px; height:35px;}
.loc1 select{width:120px;}
.loc2 select{width:73px;}
.loca select{width:250px;}
.loca1 select{width:80px;}
.subm input:hover{ box-shadow:none;}

</style>

<!--[if lt IE 9]>
<script type="text/javascript" src="js/ie6_script_other.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="body3"></div>
<div class="body1">
  <div class="main">
    <header>
      <div id="logo_box">
        <h1><a href="#" id="logo">Rufus Giwa Polytechnic, Owo <span>Entrance Examination Portal</span></a></h1>
      </div>
      <nav>
        <ul id="menu">
          <li id="menu_active"><a href="../logout.php">Home</a></li>
        </ul>
      </nav>
      <div class="wrapper">
        <div class="text1">RUGIPO PUTME Examination</div>
        <div class="text2">2015/2015 Admission <?php echo $code_id; ?></div>
       
      </div>
    </header>
  </div>
</div>
<div class="body2">
  <div class="main">
    <section id="content">
      <div class="marg_top wrapper">
       
       
      </div>
      <div class="wrapper marg_top2">
 
        <article class="col2 pad_left1">
          <div class="pad">
            <h2>Student Registration</h2>
           <div style="font-size:20px;">
		   <form action="../regconfirm.php" method="post" enctype="multipart/form-data">
		   <table border="1px" width="100%">
		   <tr><td colspan="2" style="background-color:#E8E8E8"><b>Student Bio Data</b></td></tr>
		   <tr><td width="150px">Surname</td><td><input type="text" name="surname" placeholder="Your Surname" required></td></tr>
		   <tr><td>Other Names</td><td><input type="text" name="othernames" placeholder="Your Othernames" required></td></tr>
		   <tr><td width="150px">Address</td><td><input type="text" name="address" placeholder="Your Address" required></td></tr>
		   <tr><td>Phone</td><td><input type="text" name="phone" placeholder="Your Phone Number" required></td></tr>
		   <tr><td>E-mail</td><td><input type="email" name="email" placeholder="Your E-mail" required></td></tr>
		   
		    <table border="1px" width="100%">
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td width="10px">
	<select name="gender" required><option selected="selected" >Gender...</option>
           <option  value="Male">Male</option>
           <option value="Female">Female</option></select></td><td>
		   
		   <select name="religion"><option selected="selected"required>Religion...</option>
           <option  value="Christian">Christian</option>
           <option value="Muslim">Muslim</option></select> </td></tr>
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>
	
	
	
	<select name="state"><option selected="selected"required>State...</option>
           <option  value="Ondo State">Ondo State</option>
           <option value="Ekiti State">Ekiti State</option></select></td><td>
		<div class="loc">   
		   <select name="local"><option selected="selected"required>Local Government...</option>
           <option  value="Akure South Local Government">Akure South Local Government</option>
           <option value="Akure North Local Government">Akure North Local Government</option></select> </td></tr>
	</div>
	
	
	</td></tr>
	
	<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>
	
	<div class="loc1">
		   <select name="nationality"><option selected="selected"required>Nationality...</option>
           <option  value="Nigeria">United State of America</option>
           <option value="Canada">Canada</option></select>
	</div>
	
		   </td><td>
		   
		   
	<select name="month" required style="width:75px; font-size:13px; height:32px; padding:3px"><option value="month:">Month:</option><script type="text/javascript">
		  var m = new Array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
		  for (i = 1; i<=m.length-1; i++){
			  document.write("<option value='"+i+"'>"+m[i]+"</option>");
		  }
          </script></select>
		  
		  
		  <select name="day"required style="width:60px; font-size:13px; height:32px; padding:3px"><option value="day:">Day:</option><script type="text/javascript">
		   for (i = 1; i<=31; i++){
			  document.write("<option value='"+i+"'>"+i+"</option>");
		  }
          </script></select>
		  <span class="loc2">
		  <select name="year" requiredstyle=" font-size:13px; height:32px; padding:3px"><option value="year:">Year:</option><script type="text/javascript">
		   for (i = 2015; i>=1910; i--){
			  document.write("<option value='"+i+"'>"+i+"</option>");
		  }
          </script></select>
	</span>
		   
	   </td></tr>
	
	
	 <table border="1px" width="100%">
		   <tr><td colspan="2" style="background-color:#E8E8E8"><b>Course of Choice</b></td></tr>
		   <tr><td width="150px">School</td><td>
		   <select name="school"><option selected="selected">School...</option>
           <option  value="Rufus Giwa Polytechnic, Owo">Rufus Giwa Polytechnic, Owo</option></select>
           </td></tr>
		   <tr><td>Faculty</td><td>
		   <select name="faculty"><option selected="selected"required>Faculty...</option>
           <option  value="Faculty of Applied Science">Faculty of Applied Science</option>
		   <option  value="Faculty of Applied Science">Faculty of Communication and General Studies</option>
		   <option  value="Faculty of Applied Science">Faculty of Engineering Technology</option>
		   		   </select>
		   </td></tr>
		   <tr><td width="150px">Course</td><td>
		   <select name="course"><option selected="selected"required>Course...</option>
           <option  value="Computer Engineering">Computer Engineering</option>
		   <option  value="Computer Science">Computer Science</option>
		   <option  value="Mass Coomunication">Mass Coomunication</option>
		   		   </select>
		  </td></tr>
		   
	
	<table border="1px" width="100%">
		   <tr><td colspan="3" style="background-color:#E8E8E8"><b>Jamb (UTM) Details</b></td></tr>
		   <tr><td width="150px">Secondary School Class</td><td colspan="2">
		   <select name="level"><option selected="selected"required>Sec Class...</option>
           <option  value="Science Class">Science Class</option>
		    <option  value="Commercial Class">Commercial Class</option>
			 <option  value="Art Class">Art Class</option>
		   </select>
           </td></tr>
		   <td>Jamb Number</td><td colspan="2"><input type="text" name="jamb" placeholder="Your Jamb Number" required></td></tr>
		   <tr><td rowspan="4"><br><br><br><br>Jamb Subjects</td><td>
		   <div class="loca">
		   <select name="sub1"><option selected="selected"required>Subjects...</option>
           <option  value="English Language">English Language</option>
		   <option  value="Mathematics">Mathematics</option>
		   <option  value="Economics">Economics</option>
		    <option  value="Biology">Biology</option>
		   <option  value="Civic Education">Civic Education</option>
		   <option  value="Agricultural Science">Agricultural Science</option>
		    <option  value="Computer Studies">Computer Studies</option>
		   <option  value="Geography">Geography</option>
		   <option  value="Lit-in-English">Lit-in-English</option>
		    <option  value="Government">Government</option>
		   <option  value="Christian Religion Studies">Christian Religion Studies</option>
		   <option  value="Islamic Religion Studies">Islamic Religion Studies</option>
		    <option  value="Commerce">Commerce</option>
		   <option  value="Financial Accounting">Financial Accounting</option>
		   <option  value="Physics">Physics</option>
		   <option  value="Chemistry">Chemistry</option>
		    <option  value="Further Mathematics">Further Mathematics</option>
		   <option  value="Yoruba">Yoruba</option>
		  
		   
		   		   </select></div>
		   </td><td> 
		   <div class="loca1">
		   <select name="grade1"required style="width:90px; font-size:13px; height:32px; padding:3px"><option value="grade1:">Grade:</option><script type="text/javascript">
		   for (i = 1; i<=100; i++){
			  document.write("<option value='"+i+"'>"+i+"</option>");
		  }
          </script></select></div></td></tr>
		   
		   <tr><td>
		   <div class="loca">
		    <select name="sub2"><option selected="selected"required>Subjects...</option>
           <option  value="English Language">English Language</option>
		   <option  value="Mathematics">Mathematics</option>
		   <option  value="Economics">Economics</option>
		    <option  value="Biology">Biology</option>
		   <option  value="Civic Education">Civic Education</option>
		   <option  value="Agricultural Science">Agricultural Science</option>
		    <option  value="Computer Studies">Computer Studies</option>
		   <option  value="Geography">Geography</option>
		   <option  value="Lit-in-English">Lit-in-English</option>
		    <option  value="Government">Government</option>
		   <option  value="Christian Religion Studies">Christian Religion Studies</option>
		   <option  value="Islamic Religion Studies">Islamic Religion Studies</option>
		    <option  value="Commerce">Commerce</option>
		   <option  value="Financial Accounting">Financial Accounting</option>
		   <option  value="Physics">Physics</option>
		   <option  value="Chemistry">Chemistry</option>
		    <option  value="Further Mathematics">Further Mathematics</option>
		   <option  value="Yoruba">Yoruba</option>
		  
		   
		   		   </select></div>
		  </td><td>   <div class="loca1"><select name="grade2"required style="width:90px; font-size:13px; height:32px; padding:3px"><option value="grade2:">Grade:</option><script type="text/javascript">
		   for (i = 1; i<=100; i++){
			  document.write("<option value='"+i+"'>"+i+"</option>");
		  }
          </script></select></div></td></tr>
		   
		   <tr><td>
		   <div class="loca">
		    <select name="sub3"><option selected="selected"required>Subjects...</option>
           <option  value="English Language">English Language</option>
		   <option  value="Mathematics">Mathematics</option>
		   <option  value="Economics">Economics</option>
		    <option  value="Biology">Biology</option>
		   <option  value="Civic Education">Civic Education</option>
		   <option  value="Agricultural Science">Agricultural Science</option>
		    <option  value="Computer Studies">Computer Studies</option>
		   <option  value="Geography">Geography</option>
		   <option  value="Lit-in-English">Lit-in-English</option>
		    <option  value="Government">Government</option>
		   <option  value="Christian Religion Studies">Christian Religion Studies</option>
		   <option  value="Islamic Religion Studies">Islamic Religion Studies</option>
		    <option  value="Commerce">Commerce</option>
		   <option  value="Financial Accounting">Financial Accounting</option>
		   <option  value="Physics">Physics</option>
		   <option  value="Chemistry">Chemistry</option>
		    <option  value="Further Mathematics">Further Mathematics</option>
		   <option  value="Yoruba">Yoruba</option>
		  
		   
		   		   </select></div>
		  </td><td><div class="loca1"><select name="grade3"required style="width:90px; font-size:13px; height:32px; padding:3px"><option value="grade3:">Grade:</option><script type="text/javascript">
		   for (i = 1; i<=100; i++){
			  document.write("<option value='"+i+"'>"+i+"</option>");
		  }
          </script></select></div></td></tr>
		   <tr><td>
		   <div class="loca">
		    <select name="sub4"><option selected="selected"required>Subjects...</option>
           <option  value="English Language">English Language</option>
		   <option  value="Mathematics">Mathematics</option>
		   <option  value="Economics">Economics</option>
		    <option  value="Biology">Biology</option>
		   <option  value="Civic Education">Civic Education</option>
		   <option  value="Agricultural Science">Agricultural Science</option>
		    <option  value="Computer Studies">Computer Studies</option>
		   <option  value="Geography">Geography</option>
		   <option  value="Lit-in-English">Lit-in-English</option>
		    <option  value="Government">Government</option>
		   <option  value="Christian Religion Studies">Christian Religion Studies</option>
		   <option  value="Islamic Religion Studies">Islamic Religion Studies</option>
		    <option  value="Commerce">Commerce</option>
		   <option  value="Financial Accounting">Financial Accounting</option>
		   <option  value="Physics">Physics</option>
		   <option  value="Chemistry">Chemistry</option>
		    <option  value="Further Mathematics">Further Mathematics</option>
		   <option  value="Yoruba">Yoruba</option>
		  
		   
		   		   </select></div>
		  </td><td><div class="loca1"><select name="grade4"required style="width:90px; font-size:13px; height:32px; padding:3px"><option value="grade4:">Grade:</option><script type="text/javascript">
		   for (i = 1; i<=100; i++){
			  document.write("<option value='"+i+"'>"+i+"</option>");
		  }
          </script></select></div></td></tr>
		  <tr><td>hhdhdhd</td><td colspan="3"><div class="subm"><input type="submit" style="height:50px" name="submit" value="Proceed"></div></td>
		   
	
	
		   
		   </table>
		   </form>
			
       
	   </div>
          </div>
        </article>
      </div>
    </section>
  </div>
</div>
<div class="main">
  <footer>
    <div class="wrapper">
      
      <article class="col2 pad_left1">
        <div class="pad">
          <div class="wrapper">
            
            
          </div>
        </div>
      </article>
    </div>
    <div class="under2"></div>
    <div class="footerlink">
      <p class="lf" style="font-size:15px;">Copyright &copy; <?php echo date('Y');?> <a href="#">RUGIPO Online Entrance Examination</a> - All Rights Reserved</p>
 
    </div>
  </footer>
</div>
</body>
</html>