<?php
session_start();
ini_set("pcre.recursion_limit", "524");
$connection = mysqli_connect("mysql.hostinger.in", "u847202464_sai", "sairam", "u847202464_saira");
if(mysqli_connect_error()){
	echo "<div> Error in database </div>";
	echo mysqli_connect_error();
	exit;
}
include('actions.php');
if($_SERVER['PHP_SELF'] != "/login.php"){
	 echo "<div style='float:right'><a href='?action=logout'>Log Out</a></div>";
}
	if($_GET['action'] == ""){
		include("login.php");
	}
	if( $_SESSION['allow_user'] == "allow" ){
		if($_GET['action'] == "landingpage"){
		     	include("landingpage.php");
		}else if($_GET['action'] == "page_att"){
		     	include("att2.php");
		}else if($_GET['action'] == "thanku"){
			include("thanku.php");
		}elseif($_GET['action'] == "page_add_student"){
			include("student_add.php");
		}else if($_GET['action'] == "page_view_student_details"){
			include("page_view_student_details.php");
		}else if($_GET['action'] == "page_view_student_details_edit"){
			include("page_view_student_details_edit.php");
		}else if($_GET['action'] == "page_add_faulty"){
			include("page_add_faulty.php");
		}
	}
	

 

?>
<script>
	
</script>