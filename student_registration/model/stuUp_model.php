<?php
 // include '../controller/controller.php';
  class model{
 	public  $conn;
 	
  	public function __construct()
  	{
   
    //$conn = mysqli_connect("localhost","root","") or die('Not connected to Database<br>' . mysql_error());
         }
  	
  	public function insert($Reg_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years)
  	{
       $host= "localhost";
     $username   = "root";
     $password   = "";
     $dbname= "student_registration";
  		echo $Reg_no;
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

    echo  $sql = "UPDATE  stu_reg (Reg_no,Fname,Lname,Mobile,Dept_name,Course_name,Password,Email,Name,Sem_no,Years)VALUES ('$Reg_no', '$Fname','$Lname','$Mobile','$Dept_name','$Course_name','$Password','$Email','$Name','$Sem_no','$Years')";

        if (mysqli_query($conn,$sql)) {
             echo "New record created successfully";
        } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }

         mysqli_close($conn);





	    }
  }
		//profile update
		public function updateProfile($data)
       {
        $this->Fname = $data['Fname'];
        $this->Lname = $data['Lname'];
        $this->Mobile = $data['Mobile'];
        $this->Dept_name = $data['Dept_name'];
		 $this->Course_name=$data['Course_name'];
		 $this->Password=$data['Password'];
		  $this->Email=$data['Email'];
		  $this->Name=$data['Name'];
		  $this->Sem_no=$data['Sem_no'];
		  $this->Years=$data['Years'];
        // Only validate and update the password if a value provided
        if ($data['password'] != '') {
            $this->password = $data['password'];
        }
        $this->validate();
        if (empty($this->errors)) {
            $sql = 'UPDATE stu_regSET Name = :Name,Email = :Email';
			
            // Add password if it's set
            if (isset($this->Password)) {
                $sql .= ', Password = :Password';
            }
            $sql .= "\nWHERE Reg_no= : Reg_no";
            $db = static::getDB();
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
            // Add password if it's set
            if (isset($this->password)) {
                $password_hash = password_hash($this->password, PASSWORD_DEFAULT);
                $stmt->bindValue(':password_hash', $password_hash, PDO::PARAM_STR);
            }
            return $stmt->execute();
        }
        return false;
    

  }



 ?>