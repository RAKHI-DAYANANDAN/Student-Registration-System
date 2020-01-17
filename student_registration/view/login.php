	 <?php
	include "header.php";
?>
<body style="background-image:url('../img/2.png');
background-repeat:no-repeat;
background-size:cover;">
	<center>
	
	   <div class="log" >
	     <form  name="login" onsubmit="return validate()"method="POST"action="../view/studentpro.php"><br><br>
		 <h2>User Login</h2>
		
		    	<select name="Index_no" class="fld">
	           <option value="1" class="fld">Student</option>					 
               <option value="2" class="fld">Admin</option>
             
           </select><br><br> 
				<input type="text" name="user" Placeholder="Username" class="fld"><br><br>
		 		<input type="password" name="pass" Placeholder="Password" class="fld"><br><br>
				<input type="radio" name="logged" value="logged" class="rad">Keep looged in
				<input type="radio" name="logged" value="logged" class="rad">I forgot my Pasword<br><br>
				  
		  <input type="submit" value="Cancel" class="btn">
		  <input type="submit" value="OK" class="btn"><br><br>
		 </form>
	   </div>
	</center>
	</body>
<script>
   function validate()
	 {
		 var name=document.forms["login"]["user"].value;
		 if(name=="")
		 {
			 alert("Enter a valid name");
			 document.forms["login"]["user"].focus();
			 return false;
		 }
		 else if(!isNaN(name))
		 {
			 alert("name can't be digit");
			 document.forms["login"]["user"].focus();
			 return false;
		 }
		 var pass=document.forms["login"]["pass"].value;
		 if(pass=="")
		 {
			 alert("Enter a valid password");
			 document.forms["login"]["pass"].focus();
			 return false;
		 }
		 else if(!isNaN(pass))
		 {
			 alert("Password is not in its form");
			 document.forms["login"]["pass"].focus();
			 return false;
		 }
		 
		var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,0}$/;
	    if(!passw) 
		{ 
	    alert('Correct, try another...')
		return true;
			}
		else
		{ 
		alert('Wrong password...!')
		return false;
		}
}  
		 
		 
</script>
 <?php
	include "footer.php";
?>