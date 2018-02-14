<?php
  	
?>
<html>
	<head>
	</head>
	<body>
		<center>
		<form method="post" >
			<table cellspacing="1" cellpadding="5" bgcolor="black" style="margin-top:20px;">
				<tr bgcolor='#f0f0f0'>
					<td colspan=2 align=center> 
						<strong>Add Faculty</strong>
					</td>
				</tr>
				<tr bgcolor='white'>
					<td>
						Name
					</td>
					<td>
						<input type="text" name="name" required>
					</td>
			          </tr>
			          <tr bgcolor=white>
					<td>
						Username	
					</td>
					<td>
						<input type="text" name="username" required>
					</td>
			          </tr>
			          <tr bgcolor=white>
					<td>
						Password	
					</td>
					<td>
						<input type="text" name="password" required>
					</td>
				</tr>
				<tr bgcolor=white>
					<td>
						Mobile	
					</td>
					<td>
						<input type="text" name="mobile" required>
					</td>				
				</tr>
				<?php
				if($_SESSION['master'] == 1){
				?>
				<tr bgcolor=white>
					<td>
						Master	
					</td>
					<td>
						<select name="section" id="section" required>
							<option value="">Select Section</option>
							<option value="1"  >Admin</option>
							<option value="2">Head</option>
							<option value="3">Faculty</option>
						</select>
					</td>
				</tr>
				<?php
				}else {
					echo "<input type='hidden' name='master' value='".$_SESSION['master']."' >";
				}
				?>
				
			        <tr bgcolor=white>
					<td colspan=2 align=center>
						<input type="submit" name="action" value="Add">
						<input type="hidden" name="action" value="add_faculty">
					</td>
				</tr>
			</table>
		</form>	
		</center>		
	</body>
</html>