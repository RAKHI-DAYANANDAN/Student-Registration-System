<?php
 // include '../controller/controller.php';
  class model{
 	public  $conn;
 	
  	public function __construct()
  	{
   
    //$conn = mysqli_connect("localhost","root","") or die('Not connected to Database<br>' . mysql_error());
         }
  	
  	public function insert($Reg_no,$Index_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years)
  	{
       $host= "localhost";
     $username   = "root";
     $password   = "";
     $dbname= "student_registration";
  		echo $Reg_no;
  		echo $Index_no;
  		echo $Fname;
		echo $Lname;
		echo $Mobile;
		echo $Dept_name;
		echo $Course_name;
		echo $Password;
		echo $Email;
		echo $Name;
		echo $Sem_no;
		echo $Years;
	$conn =mysqli_connect($host, $username, $password,$dbname);

    echo  $sql = "INSERT INTO  stu_reg (Reg_no,Index_no,Fname,Lname,Mobile,Dept_name,Course_name,Password,Email,Name,Sem_no,Years)VALUES ('$Reg_no','$Index_no', '$Fname','$Lname','$Mobile','$Dept_name','$Course_name','$Password','$Email','$Name','$Sem_no','$Years')";

        if (mysqli_query($conn,$sql)) {
             echo "New record created successfully";
        } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }

         mysqli_close($conn);

	    }
  	}


function getlogin($Index_no,$Name,$Password){
	if((isset($_REQUEST['Name']) &&  (isset($_REQUEST['Password']))
	{
		
	if((isset($_REQUEST['Index_no'])=="2"))
	{
		echo "admin.php";
		else
		{
			return "studentpro.php";
			}
	}
	}
}
 ?>
