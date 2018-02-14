<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
      <link rel="stylesheet" href="style.css">

  
</head>

<body>
<form method="post">

  <div class="main-wrap">
        <?php
	if($_SESSION['allow_user'] == "not_allow"){
	     echo "<div style='color:red; position:absolute;top:35%; left:40%;' >Please eneter correct username and password</div>";
	}
	?>
        <div class="login-main">
        
            <input type="text" name="username" placeholder="user name" required class="box1 border1">
            <input type="password" name="password" placeholder="password" required class="box1 border2">
            <input type="submit" class="send" value="Go">
            <input type="hidden" name="action"  value="Go">
            <p>Forgot Your Password? <a href="#">click here</a></p>    
        </div>
    </div>
</form>
  
  
</body>
</html>
