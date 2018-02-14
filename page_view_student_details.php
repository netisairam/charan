<?php
      if( $_SESSION['table'] ){
	      	$de = explode( "_",$_SESSION['table'] );
	      	$data_details['year'] =  $de[0];
	      	$data_details['branch'] =  $de[1];
	      	$data_details['section'] =  $de[2];
	      	$_SESSION['table'] = "";
	      	$_SESSION['id'] = "";
    		$_SESSION['rollno'] =  "";
      	
      }else if($_POST){
            	$data_details['year'] =  $_POST['year'];
	      	$data_details['branch'] =  $_POST['branch'];
	      	$data_details['section'] =  $_POST['section'];
      }
?>
<html>
	<head>
	</head>
	<body>
		<center>				
		<div style="margin-top:30px;">
				<a href="?action=page_add_student"><b>To Add Student Details</b></a>
		</div>
		<div style='margin-top:10px;'>
			<span style="cursor:pointer">Check All</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span style="cursor:pointer">Unchecl All</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span style="cursor:pointer">Delete Selected</span>
		</div>
		<form method="post" >
			<table cellspacing="1" cellpadding="5" bgcolor="black" style="margin-top:20px;">
				<tr bgcolor='#f0f0f0'>
					<td>
						Branch
					</td>
					<td>
						<select name="branch" id="branch" required>
							<option value="">Select Branch</option>
							<option value="ece" <?=$data_details['branch']== "ece"?"selected":"" ?> >ECE</option>
							<option value="cse" <?=$data_details['branch']== "cse"?"selected":"" ?> >CSE</option>
							<option value="mech" <?=$data_details['branch']== "mech"?"selected":"" ?> >Mech</option>
							<option value="eee" <?=$data_details['branch']== "eee"?"selected":"" ?>>EEE</option>
							<option value="it" <?=$data_details['branch']== "it"?"selected":"" ?>>IT</option>
							<option value="civil" <?=$data_details['branch']== "civil"?"selected":"" ?>>Civil</option>
						<select>
					</td>
			
					<td>
						Year	
					</td>
					<td>
						<select name="year" id="year" required>
							<option value="">Select Year</option>
							<option value="1" <?=$data_details['year']== "1"?"selected":"" ?> >First</option>
							<option value="2" <?=$data_details['year']== "2"?"selected":"" ?> >Second</option>
							<option value="3" <?=$data_details['year']== "3"?"selected":"" ?> >Third</option>
							<option value="4" <?=$data_details['year']== "4"?"selected":"" ?> >Fourth</option>
						</select>
					</td>
			
					<td>
						Section	
					</td>
					<td>
						<select name="section" id="section" required>
							<option value="">Select Section</option>
							<option value="1" <?=$data_details['section']== "1"?"selected":"" ?> >First</option>
							<option value="2" <?=$data_details['section']== "2"?"selected":"" ?> >Second</option>
							<option value="3" <?=$data_details['section']== "3"?"selected":"" ?> >Third</option>
							<option value="4" <?=$data_details['section']== "4"?"selected":"" ?> >Fourth</option>
						</select>
					</td>
					<td>
						<input type="submit" name="action" value="Show Details">
						<input type="hidden" name="action" value="show_detials_roll_no">
					</td>
				</tr>
			</table>
		</form>
		<?php
			if($_POST['action'] == "show_detials_roll_no" || $_SESSION['show_details']){
		?>
				<table cellspacing="1" cellpadding="5" bgcolor="black" style="margin-top:20px;">
					<tr bgcolor="#f0f0f0">
						<th>
							
						</th>
						<th>
							Id
						</th>
						<th>
							Roll no
						</th>
						<th colspan=2>
							Action
						</th>
					</tr>
					<?php
						$table_name = $data_details['year']."_".$data_details['branch']."_".$data_details['section'];
						$_SESSION['table'] = $table_name;
						$query = "select * from ".$table_name;
						//echo $query; 
						$res= mysqli_query( $connection, $query );
						if( mysqli_error( $connection ) ){
							//echo $query ;
							  $error = mysqli_error( $connection );
							//if(preg_match("/(doesn\'t exist)/i", $error){
							if($error == "Table 'u847202464_saira.".$table_name."' doesn't exist" ){
									echo "<div style='font-size:26px;'><b>Please Add Student Details</b></div>";	
							}else{
								echo "<div style='font-size:26px;'><b>Content Web Admin</b></div>";
							}
							//echo mysqli_error( $connection );
						//	exit;
						}
						while($row = mysqli_fetch_array( $res )){
						   	echo "<tr bgcolor='white'><td><input type='checkbox' name='roll_delete'></td><td>".$row['id']."</td><td>".$row['roll_no']."</td>";
							echo "<td><a href='?action=page_view_student_details_edits&id=".$row['id']."&tablename=".$table_name."&rollno=".$row['roll_no']."'>Edit</a>";
							echo "</td><td><a href='?action=page_view_student_details_delete&delete_student_id=".$row['id']."'>delete</a></td></tr>";
						}
					?>
				</table>
		<?php
			}
			$_SESSION['show_details'] = "";						
		?>
		</center>
	</body>                          
</html>