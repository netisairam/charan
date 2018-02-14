<?php
	if(!$_SESSION['att']){
		header('Location: ?action=att');
	}else{
		echo "<div align='center' style='font-size:28px;'><b>Attedance</b></div>";
		echo "<div align='center' style='color:red'>".$_SESSION['att']."</div>";
		echo "<div style='float:right'><b><a href='http://kishore.sairamneti.info'>Back to home page</a></b></div>";
		echo "<div align='center'><img src='Nice-Pic-Of-Thank-You.jpg'></div>";
	}
?>