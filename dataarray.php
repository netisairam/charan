<?php
exit;
$data = array(
		"14P31A04D5",
		"14P31A04D6",
		"14P31A04D7",
		"14P31A04D8",
		"14P31A04D9",
		"14P31A04E0",
		"14P31A04E1",
		"14P31A04E2",
		"14P31A04E3",
		"14P31A04E4",
		"14P31A04E5",
		"14P31A04E6",
		"14P31A04E7",
		"14P31A04E8",
		"14P31A04E9",
		"14P31A04F0",
		"14P31A04F1",
		"14P31A04F2",
		"14P31A04F3",
		"14P31A04F4",
		"14P31A04F5",
		"14P31A04F6",
		"14P31A04F7",
		"14P31A04F8",
		"14P31A04F9",
		"14P31A04G0",
		"14P31A04G1",
		"14P31A04G2",
		"14P31A04G3",
		"14P31A04G4",
		"14P31A04G5",
		"14P31A04G6",
		"14P31A04G7",
		"14P31A04G8",
		"14P31A04G9",
		"14P31A04H0",
		"14P31A04H1",
		"14P31A04H2",
		"14P31A04H3",
		"14P31A04H4",
		"14P31A04H5",
		"14P31A04H6",
		"14P31A04H7",
		"14P31A04H8",
		"14P31A04H9",
		"14P31A04I0",
		"14P31A04I1",
		"14P31A04I2",
		"14P31A04I3",
		"14P31A04I4",
		"14P31A04I5",
		"14P31A04I6",
		"14P31A04I7",
		"14P31A04I8",
		"14P31A04I9",
		"14P31A04J0",
		"14P31A04J1",
		"14P31A04J2",
		"14P31A04J3",
		"14P31A04J4",
		"14P31A04J5",
		"14P31A04J6",
		"14P31A04J7",
		"14P31A04J8",
		"14P31A04J9",
		"14P31A04K0",
		"14P31A04K1",
		"14P31A04K2",
		"14P31A04K3",
		"14P31A04K4",
		"15P35A0415",
		"15P35A0416",
		"15P35A0417",
		"15P35A0418",
		"15P35A0419",
		"15P35A0420"
	);
	
	$connection = mysqli_connect("mysql.hostinger.in", "u847202464_sai", "sairam", "u847202464_saira");
	if(mysqli_connect_error()){
		echo "<div> Error in database </div>";
		echo mysqli_connect_error();
		exit;
	}
	foreach($data as $no){
		$query = "insert into 4ece3(rollno, phone) values (
		'" . mysqli_escape_string( $connection, $no) . "', 
		'" . mysqli_escape_string( $connection,  "7013507684") . "' )";
		mysqli_query( $connection, $query );
	
		if( mysqli_error( $connection ) ){
			echo mysqli_error( $connection );
			exit;
		}
	}
	
?>