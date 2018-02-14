<?php
$roll = array();
$query = "select rollno from 4ece3 ";
$res = mysqli_query( $connection, $query );
if( mysqli_error( $connection ) ){
	echo $query ;
	echo mysqli_error( $connection );
	exit;
}
while($row = mysqli_fetch_assoc($res)){
     $roll[substr($row['rollno'],7)] = $row['rollno'];  
}

if( $_POST['action'] == "fullrollno" ){
	echo $roll[strtoupper($_POST['attedance'])];
	exit;
}
if( $_POST['act'] == "data" ){
	session_unset();
	$_SESSION['att'] =  $_POST['attedance'];
	echo "ok";
	exit;
}
?>
<style>
	.closebutton:hover{  color:#FF0000;}
	.signupdiv{ width:275px; height:325px; border:1px solid #000000; }
	.crte{ border:1px none #000000; padding:5px; margin-top:10; min-width:150px; background-color:#CCCCCC; float:left; margin-left:10px; }
	.close{ background-color:#FF0000; text-align:center; color:#FFFFFF; width:25px; float:right; }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
var tagname = [];
var count = 0;
function add_rollno(){
	atte =  Array();
	var val = document.getElementById('student_id').value;
	newdiv = document.createElement('div');
	document.getElementById('student_id').value = " ";
	
	str = '14P31A0'+val.toUpperCase();
	str = str.replace(/\s/g, '');
	datavalue(str);
	
}	
function datavalue(val){	
	newdiv.innerHTML = val;
	newdiv.className = 'crte';
	newdiv.setAttribute("id", "tagvalue"+count);
	tagname.push(val); 
	newdiv1 = document.createElement('div');
	//alert(tagname[count]);
	newdiv1.innerHTML = "x";
	newdiv1.className = 'close';
	newdiv1.onclick = function() { remove_child(this, val); };
	newdiv.appendChild(newdiv1);
	document.getElementById('display_rollno').appendChild(newdiv);
	newdiv2 = document.createElement('input');
	newdiv2.setAttribute("type", "hidden");
	newdiv2.setAttribute("id", "tag"+count);
	newdiv2.setAttribute("name", "tag[]");
	newdiv2.setAttribute("value", tagname[count]);
	newdiv.appendChild(newdiv2);
	newdiv3 = document.createElement('input');
	newdiv3.setAttribute("type", "hidden");
	newdiv3.setAttribute("name", "count");
	newdiv3.setAttribute("value", count);
	count++;
	newdiv.appendChild(newdiv3);	
}
function remove_child(obj, val){
	rrr = tagname;
	tagname = [];
  $( obj ).closest('.crte').remove();
  //remove(tagname, val);
//  alert(val);
  for(i=0; i<rrr.length; i++){
	if(rrr[i] != val){
	    tagname.push(rrr[i]);
	}  	
  }
  alert(tagname);
}
var att = "";
function submit_rollno(){
        att = tagname.join();
	//alert(att); 
        var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
		if(this.responseText){
			document.location.href ="?action=thanku";
		}
	}
	};
	xhttp.open("POST", "", true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("action=att&act=data&attedance="+att);
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