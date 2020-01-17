<?php
echo "hi";


class controller{
 var $Reg_no;
 var $Index_no;
 var $Fname;
 var $Lname;
 var $Mobile;
 var $Dept_name;
 var $Course_name;
 var $Password;
 var $Email;
 var $Name;
 var $Sem_no;
 var $Years;
 
 //private $password;

public function __construct($Reg_no,$Index_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years)
{
   echo "hello";
   $this->Reg_no=$Reg_no;
   $this->Index_no=$Index_no;
   $this->Fname=$Fname;
   $this->Lname=$Lname;
   $this->Mobile=$Mobile;
   $this->Dept_name=$Dept_name;
   $this->Course_name=$Course_name;
   $this->Password=$Password;
   $this->Email=$Email;
   $this->Name=$Name;
   $this->Sem_no=$Sem_no;
   $this->Years=$Years;
}
/*public function display(){
	$reslt=$this->model->getlogin.php();
	if($reslt=='ok'){
		include "../view/studentpro.php";
	}
	else{include "view/login.php";}
}*/
public function display()
{
   $Reg_no= $this->Reg_no;
   $Index_no= $this->Index_no;
   $Fname= $this->Fname;
   $Lname= $this->Lname;
   $Mobile= $this->Mobile;
   $Dept_name= $this->Dept_name;
   $Course_name= $this->Course_name;
   $Password= $this->Password;
   $Email= $this->Email;
   $Name= $this->Name;
   $Sem_no= $this->Sem_no;
   $Years= $this->Years;
   
  include '../model/model.php';
  $mod= new model();
  $mod->insert($Reg_no,$Index_no,$Fname,$Lname,$Mobile,$Dept_name,$Course_name,$Password,$Email,$Name,$Sem_no,$Years);
  echo "ok";

}
//first page and  Login
public function invoke()
{
	include "view/login.php";
}

}
 $con=new controller($_POST['Reg_no'],$_POST['Index_no'],$_POST['Fname'], $_POST['Lname'],$_POST['Mobile'],$_POST['Dept_name'],$_POST['Course_name'],$_POST['Password'],$_POST['Email'],$_POST['Name'],$_POST['Sem_no'],$_POST['Years']);
 $con->display();
//require_once(../model/Login.php)
//$loginSystem = new LoginSystem();
//if($loginSystem->doLogin($this->username,$this->password))

/*function getlogin($Index_no,$Name,$Password){
	if((isset($_REQUEST['Name']) &&  (isset($_REQUEST['Password']))
	{
		
	if((isset($_REQUEST['Index_no'])=="2"))
	{
		include "admin.php";
		else
		{
			return "studentpro.php";
			}
	}
}
}*/

?>


