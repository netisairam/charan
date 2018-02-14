<script>
	rollno = new Array(); 
	count = 0; 
	function add_rollno(){
	    //alert("charan");
	    if(document.getElementById('student_id').value){
	           rollno[count] = document.getElementById('student_id').value + " "; 
		   count++;
		   disarray = rollno.join();
		   document.getElementById('display_rollno').innerHTML = disarray;
		   document.getElementById('student_id').value = ""; 
		   document.getElementById('student_id').focus(); 
	    }else{
	    	alert("please enter roll number");
	    }
	    
	}
	function submit_rollno(){
		alert(" Thank you for submitting attendance");
		document.location = "http://kishore.sairamneti.info/";
	}
</script>
<body bgcolor="gray">
	<div align="center">
		<div  id="display_rollno" style="text-align:left; padding-left:10px; padding-top:10px; font-size:40px;  overflow-y: scroll; height:250px; background-color:white; max-width:600px; ">
		</div>
	</div>
	<div align="center" style="margin-top:30px;">
		<input type="text" id="student_id" style=" width:500px; height:75px; font-size:28px;">
		<input type="button" value="ADD" onclick="add_rollno()" style=" width:100px; height:75px; font-size:28px;">
	</div>
	<div align="center">
		<input type="submit" value="Submit" onclick="submit_rollno()" style=" margin-top:10px; width:500px; height:75px; font-size:28px;">
	</div>
</body>
