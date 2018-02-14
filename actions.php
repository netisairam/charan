<?php
    if($_POST['action'] == "Go"){
    	$query = "select * from users where username='".$_POST['username']."' and password = '". $_POST['password'] ."'";
    	    
	    $res= mysqli_query( $connection, $query );
	if( mysqli_error( $connection ) ){
		//echo $query ;
		//echo mysqli_error( $connection );
		echo "<div style='font-size:26px;'><b>Content Web Admin</b></div>";
		exit;
	}
        $row = mysqli_fetch_array( $res );
  
        if($row){
             // print_r($row);
               	if( $row['master'] == 1 ){
               		$_SESSION['master'] = 1;
		}else if( $row['master'] == 2 ){
			$_SESSION['master'] = 2;
		}else if( $row['master'] == 3 ){
			$_SESSION['master'] = 3;
		}
		$_SESSION['allow_user'] = "allow"; 
		header("Location: ?action=landingpage");
    		exit;
	}else{
		$_SESSION['allow_user'] = "not_allow"; 
		header("Location: ?action");
    		exit;
	}

    }
    if($_GET['action'] == "logout" ){
    	session_destroy();
    	$_SESSION['allow_user'] = "not_allow"; 
		header("Location: ?action");
    		exit;
    }
    if($_POST['action'] == "add_students"){
    	print_r($_POST);
    	$query = "SHOW TABLES LIKE '".$_POST['table_name']."'";
 	$res= mysqli_query( $connection, $query );
	if( mysqli_error( $connection ) ){
		//echo $query ;
		//echo mysqli_error( $connection );
		echo "<div style='font-size:26px;'><b>Content Web Admin</b></div>";
		exit;
	}
        $row = mysqli_fetch_array( $res );
        if(!$row){
        /*
	CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
	*/
		$query = "CREATE TABLE ". $_POST['table_name'] ."( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,";
		$query = $query . "roll_no VARCHAR(30) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
		mysqli_query( $connection, $query );
		if( mysqli_error( $connection ) ){
			//echo $query ;
			//echo mysqli_error( $connection );
			echo "<div style='font-size:26px;'><b>Content Web Admin</b></div>";
			exit;
		}	
	}
	for($i=1; $i<=$_POST['total_no_of_students']; $i++){
		$roll = "roll_no_".$i;
		$query = "insert into ".$_POST['table_name']."(roll_no) values (
		'" . mysqli_escape_string( $connection,  $_POST[$roll]) . "' )";
		mysqli_query( $connection, $query );
		if( mysqli_error( $connection ) ){
			//echo mysqli_error( $connection );
			echo "<div style='font-size:26px;'><b>Content Web Admin</b></div>";
			exit;
		}
	}
	$_SESSION['table'] = $_POST['table_name'];
        $_SESSION['show_details'] =  true;
    	header("Location: ?action=page_view_student_details");
    	exit;
    }
    if( $_GET['action'] == "page_view_student_details_edits" ){
    	$_SESSION['id'] = $_GET['id'];
    	$_SESSION['table'] =  $_GET['tablename'];
    	$_SESSION['rollno'] =  $_GET['rollno'];
    	$_SESSION['show_details'] =  true;
    	header("Location: ?action=page_view_student_details_edit");
    	exit;
    }
    if( $_POST['action'] == "update_detials_roll_no"){
	
	$query = "update ".$_SESSION['table']." set roll_no = '" . mysqli_escape_string( $connection, $_POST['edited_roll_no'] ) . "'
	where id=  '" . $_POST['edited_id'] ."' LIMIT 1 ";	
	mysqli_query( $connection, $query );
	if( mysqli_error( $connection ) ){
	//	echo mysqli_error( $connection );
		echo "<div style='font-size:26px;'><b>Content Web Admin</b></div>";
		exit;
	}
	header("Location: ?&action=page_view_student_details");
		exit;
	}
	if($_GET['action'] == "page_view_student_details_delete"){
		$query = "delete from ".$_SESSION['table']." where id =".$_GET['delete_student_id'];
		//$query = "delete from students1 where id in( " . $_GET['ids'] . " )";
		mysqli_query( $connection,$query );
		if( mysqli_error( $connection ) ){
	//	echo mysqli_error( $connection );
		echo "<div style='font-size:26px;'><b>Content Web Admin</b></div>";
		exit;
		}
		$_SESSION['show_details'] =  true;
		$_SESSION['table'] = $_SESSION['table'];
		header("Location: ?&action=page_view_student_details");
		exit;		
	}
?>