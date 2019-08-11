<!DOCTYPE html>
<html>
<head>
	<title>Update Page</title>
</head>
<body>
   <?php var_dump($users);
   foreach ($users as $u) {
    	# code...
     ?>
   <form name="frm" method="post" action="<?php echo base_url();?>index.php/intermediate/update/<?php echo $u->id; ?>">
	  <p>
	  	First Name : <input type="text" name="fname" value="<?php echo $u->fname;?>">
      </p>
      <p>
      	Last Name : <input type="text" name="lname" value="<?php echo $u->lname?>">
      </p>
      <p>
      	Mobile : <input type="text" name="mobile" value="<?php echo $u->mobile;?>">
      </p>
      <p>
      	 Email : <input type="text" name="email" value="<?php echo $u->email;?>">
      </p>
      <p>
      	  <button>Edit</button>
      </p>

   </form>
   <?php
    }
    ?>
</body>
</html>