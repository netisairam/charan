<html>
	<head>
		<title>
			E.C.E Attendance 
		</title>
	</head>
	<body>
		<div>
			<?php
			if( $_SESSION['master'] == 1 || $_SESSION['master']  == 2 ){
			?>
				<div style="float:left; margin-left:20px; margin-top:10px; font-size:36px;">
					<strong><a href="?action=page_add_student">Add Student</a></strong>
					<strong><a href="?action=page_add_faulty">Add faculty</a></strong>					
				</div>
			<?php
			}
			?> 
			<div style="float:right; margin-right:20px; margin-top:10px; font-size:36px;">
				<strong><a href="?action=page_att">ECE Attendance</a></strong>					
			</div>  
			
			<div  style="position:absolute; top:6; left:36%">       
				<img src="kishorehod.jpe" style='width:400px; margin-top:150px;' >
			</div>  
		</div>
	</body>
</html>