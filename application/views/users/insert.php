<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>

	   <form name="frm" method="post" action="<?php echo base_url(); ?>index.php/Intermediate/ins">
	   	<p>First Name :</p>
	   	<input type="text" name="fname" required>
	   	<p>Last Name :</p>
	   	<input type="text" name="lname" required>
	   	<p>Mobile :</p>
	   	<input type="text" name="mobile" required>
	   	<p>Email :</p>
	   	<input type="text" name="email" required>
	   	<p>
	   		  <button name="btn" value="ok">Submit</button>

	   	</p>
	   </form>

</body>
</html>