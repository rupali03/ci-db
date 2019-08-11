<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form action="<?php echo base_url() ;?>index.php/Intermediate/login_check" method="post">
	  <input type="text" name="email" placeholder="email">
	  <input type="text" name="mobile" placeholder="mobile">
	  <button name="login_btn"  value="ok">LOGIN</button>
</form>
           <?php
            if(isset($msg))
            	echo "<font color='red'>".$msg."</font>";

	     ?>
</body>
</html>