<?php 

   include('../config/connection.php');
    include ("header.php");
?>
<body style="background-image:url('../img/1.png');
background-repeat:no-repeat;
background-size:cover;">
<div align="center"class="regform">
<!--<form name="register"action="../controller/student_controller.php/controller" method="post">-->
<form name="register"    method="POST" onsubmit="return validate()" action="../controller/student_controller.php" class="reg">
<h1><center> Registration Form<hr></center></h1>
<script>
function validate()
	{   var Reg_no=document.forms["register"]["Reg_no"].value;
	    var Fname=document.forms["register"]["Fname"].value;
		var Lname=document.forms["register"]["Lname"].value;
		var Mobile=document.forms["register"]["Mobile"].value;
		var Dept_name=document.forms["register"]["Dept_name"].value;
		var Course_name=document.forms["register"]["Course_name"].value;
		var Password=document.forms["register"]["Password"].value;
		var Email=document.forms["register"]["Email"].value;
		var Name=document.forms["register"]["Name"].value;
		var Sem_no=document.forms["register"]["Sem_no"].value;
		var Years=document.forms["register"]["Years"].value;
		
		
		if(Reg_no=="")
		{
			alert("plse entr the register number");
			document.forms["register"]["Reg_no"].focus();
			return false;
		}	
		else if(Fname=="")
		{
			alert("plse entr the first name");
			document.forms["register"]["Fname"].focus();
			return false;
		}	
		else if(Lname=="")
		{
			alert("plse entr the last name");
			document.forms["register"]["Lname"].focus();
			return false;
		}
		else if(Mobile=="")
		{
			alert("plse entr the mobile");
			document.forms["register"]["Mobile"].focus();
			return false;
		}
		else if(Dept_name=="")
		{
			alert("plse entr the department name");
			document.forms["register"]["Dept_name"].focus();
			return false;
		}	
		else if(Course_name=="")
		{
			alert("plse entr the course");
			document.forms["register"]["Course_name"].focus();
			return false;
		}
        else if(Password=="")
		{
			alert("plse entr the password");
			document.forms["register"]["Password"].focus();
			return false;
		}			
		else if(Email=="")
		{
			alert("plse entr the email");
			document.forms["register"]["Email"].focus();
			return false;
		}
        else if(Name=="")
		{
			alert("plse entr the user name");
			document.forms["register"]["Name"].focus();
			return false;
		}	
				
		
		else if(Sem_no=="")
		{
			alert("plse entr the sem number");
			document.forms["register"]["Sem_no"].focus();
			return false;
		}
		else if(Years=="")
		{
			alert("plse entr the year");
			document.forms["register"]["Years"].focus();
			return false;
		}
		
		else if(pwd.length<6)
		{
			alert("password min 6 value");
			document.forms["register"]["password"].focus();
			return false;
		}	
		else if(pwd==cpwd)
			{
				return true;
			}
		else{
			alert("Password and conform password");
			return false;
		    }
		alert("checkpoint1");
			return true;
	}
</script>
<div class="form-wrapper">
Register Number:	 <input type="text"  name="Reg_no" class="fld" ><br><br>
</div>
Status:	<select name="Index_no" class="fld">
	           <option value="1" class="fld">Student</option>					 
               <option value="2" class="fld">Admin</option>
             
</select><br><br> 

First Name:	 <input type="text"  name="Fname" class="fld"><br><br>
Last Name:	 <input type="text"  name="Lname" class="fld"><br><br>
mobile no:	 <input type="text"  name="Mobile"   class="fld"><br><br>
Dept Name:	 <select name="Dept_name" class="fld">
	           <option value="BCA" class="fld">BCA</option>					 
               <option value="MCA" class="fld">MCA</option>
               <option value="BTECH" class="fld">BTECH</option>	
			   <option value="MTECH" class="fld">MTECH</option>
</select><br><br>
Course Name: <select name="Course_name" class="fld">
	           <option value="CSE" class="fld">CSE</option>					 
               <option value="EC" class="fld">EC</option>
               <option value="MECH" class="fld">MECH</option>	
			   <option value="CE" class="fld">CE</option>
</select><br><br>
Password:	 <input type="password"  name="Password"  class="fld"><br><br>
Email:	 <input type="email"  name="Email"  class="fld"><br><br>
Username:	 <input type="text"  name="Name"   class="fld"><br><br>

Sem_no:	 <select name="Sem_no" class="fld">
	           <option value="1" class="fld">1</option>					 
               <option value="2" class="fld">2</option>
               <option value="3" class="fld">3</option>	
			   <option value="4" class="fld">4</option>
</select><br><br> 

Years:	<select name="Years" class="fld">
	           <option value="1" class="fld">1</option>					 
               <option value="2" class="fld">2</option>
               <option value="3" class="fld">3</option>	
			   <option value="3" class="fld">4</option>
</select><br><br> 


<input type="submit" value="submit" class="fld-btn" >
</div>
<?php 
   include "footer.php";
?>