<?php
      //$_SESSION['id']
    	$_SESSION['table']; 
    	$_SESSION['rollno']; 
?>
<html>
	<head>
	</head>
	<body>
		<center>
			<div style="">
				<form method="post" >
					<table cellspacing="1" cellpadding="5" bgcolor="black" style="margin-top:20px;">
						<tr bgcolor='#f0f0f0'>
							<td colspan=2 align='center'>
								<b>Edit Student Details</b>
							</td>
						</tr>
						<tr bgcolor='white'>
							<td>
								Roll No	
							</td>
							<td>
								<input type="text" name="edited_roll_no" value="<?=$_SESSION['rollno']?>">
							</td>
						</tr>						
						<tr bgcolor='white'>
							<td colspan=2 align='center'>
								<input type="submit"  value="Update">
								<a href="?action=page_view_student_details"><input type="button"  value="Cancel"></a>
								<input type="hidden" name="action" value="update_detials_roll_no">
								<input type="hidden" name="tablename" value="<?=$_SESSION['table']?>">
								<input type="hidden" name="edited_id" value="<?=$_SESSION['id']?>">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</center>
	</body>
</html>