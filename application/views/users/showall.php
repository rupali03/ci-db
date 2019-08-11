<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
		
	</style>
</head>
<body>
      <?php   
       $data = $this->session->get_userdata();
          if(isset($data['usersession']['fname'])){
	  ?>
       <div style="float:right">
       	Welcome <?php echo $data['usersession']['fname']; ?>
       	<a href="<?php echo base_url();?>index.php/intermediate/logout">Logout</a>
       </div>
   <?php }else header("location:".base_url()."index.php/intermediate/login_check"); ?>   
	  This is The View Page !
	  <?php 
        #     var_dump($users);

	  ?>

<a href="<?php echo base_url();?>index.php/intermediate/ins">INSERT DATA</a>

	   <table class="table table-dark">
	   	   <tr>
	   	   	   <!-- <th>Action</th> -->
	   	   	   <th>First Name</th>
	   	   	   <th>Last Name</th>
	   	   	   <th>Phone</th>
	   	   	   <th>Email</th>
	   	   	   <th>Action</th>

	   	   </tr>
	   	   <?php

                 foreach($users as $rows){
	   	    ?>
	   	   <tr>
	   	   	  
	   	   	   <td><?php echo $rows->fname;?></td>
	   	   	   <td><?php echo $rows->lname;?></td>
	   	   	   
	   	   	   <td><?php echo $rows->mobile; ?></td>
	   	   	   <td><?php echo $rows->email; ?></td>
	   	   	   <td><a href="<?php echo base_url();?>index.php/intermediate/read/<?php echo $rows->id ?>">Edit</a></td>
	   	   	   <td><a href="<?php echo base_url();?>index.php/intermediate/delete/<?php echo $rows->id?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a></td>


	   	   </tr>
	   	<?php } ?>

	   </table>

</body>
</html>