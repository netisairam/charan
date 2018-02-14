<html>
	<head>
	</head>
	<body>
		<script>
			function createrow(){
				totalstu = "";
				branch = "";
				year = "";
				section = "";
				
				totalstu = document.getElementById('totalstu').value;
				branch = document.getElementById('branch').value;
				year = document.getElementById('year').value;
				section = document.getElementById('section').value;
				//document.getElementById('').value;
				error = "";
				if(!totalstu){
					error = "Total Students fields is empty \n";
				}
				if(!branch){
					error = error + "please select branch \n";
				}
				if(!year){
					error = error + "please select year \n";
				}
				if(!section){
					error = error + "please select section";
				}
				if(error){
				         alert(error);
				}else{
					vstr = "";
					for(i=1; i<=totalstu; i++){
						vstr = vstr + "<tr bgcolor='white'>";
						vstr = vstr + "<td>"+i+"</td>";
						vstr = vstr + "<td><input type='input' name='roll_no_"+i+"' id='roll_no_"+i+"'></td>";
						vstr = vstr + "</tr>";							
					}
					document.getElementById('insert_data').innerHTML = vstr;
					document.getElementById('totalstu').value = "";
					dvstr = "";
					dvstr = "<td colspan=2 align=\"center\"><input type=\"submit\" value=\"Add\">";
					dvstr = dvstr + "<input type=\"hidden\" name=\"action\" value=\"add_students\">";
					dvstr = dvstr + "<input type=\"hidden\" name=\"table_name\" value='"+year+"_"+branch+"_"+section+"'>";
					dvstr = dvstr + "<input type=\"hidden\" name=\"total_no_of_students\" value='"+totalstu+"'></td>";
					document.getElementById('footer_data_submit').innerHTML = dvstr;
					if( 1 == 2){
						document.getElementById('branch').value = "";
						document.getElementById('year').value = "";
						document.getElementById('section').value = "";
						document.getElementById('add_students_datas').style.display = 'block';
					}
				}
			}
		</script>
		<center>
			<div style="margin-top:30px;">
				<a href="?action=page_view_student_details"><b>Veiw Student Details</b></a>
			</div>
			<div style="margin-top:10px;">
				<table cellspacing="1" cellpadding="5" bgcolor="black" style="margin-top:20px;">
					<tr bgcolor='#f0f0f0'>
						<td>
							No of Students to add 	
						</td>
						<td>
							<input type="number" name="totalstu" id="totalstu">
						</td>
						<td>
							Branch
						</td>
						<td>
							<select name="branch" id="branch" required>
								<option value="">Select Branch</option>
								<option value="ece">ECE</option>
								<option value="cse">CSE</option>
								<option value="mech">Mech</option>
								<option value="eee">EEE</option>
								<option value="it">IT</option>
								<option value="civil">Civil</option>
							<select>
						</td>
				
						<td>
							Year	
						</td>
						<td>
							<select name="year" id="year" required>
								<option value="">Select Year</option>
								<option value="1">First</option>
								<option value="2">Second</option>
								<option value="3">Third</option>
								<option value="4">Fourth</option>
							</select>
						</td>
				
						<td>
							Section	
						</td>
						<td>
							<select name="section" id="section" required>
								<option value="">Select Section</option>
								<option value="1">First</option>
								<option value="2">Second</option>
								<option value="3">Third</option>
								<option value="4">Fourth</option>
							</select>
						</td>
						<td>
							<input type="button" value="Add" onclick="createrow()">
						</td>
					</tr>
				</table>
				
			</div>
		<form method="post" >
		 	<table cellspacing="1" cellpadding="5" bgcolor="black" style="margin-top:20px; " id="add_students_datas">
		 		 <thead>
				 <tr bgcolor='#f0f0f0'>
		 			<td colspan=2 style="text-align:center">
		 				Add Student
					 </td>
				</tr>
				</thead>
				<tbody id="insert_data">
				
				</tbody>
				<tfoot>
				<tr bgcolor="white" id="footer_data_submit">
					
						
					
				</tr>
				</tfoot>
			</table>
		</form>
		</center>
	</body>
</html>