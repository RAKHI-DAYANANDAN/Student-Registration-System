<?php 

   include('../config/connection.php');
    include ("header.php");
	
?>

<!--sidebar start-->
<aside>
<link href="../css/style1.css" type="text" >
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="register" tabindex="5000" style="overflow: hidden; outline: none;">
            <img src="../img/1.png" class="prfl">
		
			<?php 
			session_start();
                if($_SESSION["Name"]) 
	               {
					   echo"<h4>" .$_SESSION["Name"]."</h4>"; 
	               }
		    ?>
			<ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu dcjq-parent-li">
                    <a href="student_list.php"  class="dcjq-parent">
                        
                        <span>Student Managemnet</span></a>
                    
                </li>
                
  
                <li>
                    <a href="logout.php">
                        
                        <span>Logout Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
</aside>		
		
		
		<!--main content start-->
<!---<section Reg_no="main-content">
	
	<div class="row">
	<div class="col">
	<p><a href="pop.php"><img src="../img/2.png"></a></p>
		<?php $num = $connection->query("select count(Reg_no) from  stu_reg where Index_no='1'")->fetchColumn();
			  echo "<h2> ".$num. "+</h2>";
			  echo "<h5>students</h5>";?>
	</div>
	</div>
    </section>
</section>-->
