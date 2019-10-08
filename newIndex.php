<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>File Your Complaint Here<h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		
		<div class="container">
			  <form action="index.php" method="post">
				<label for="fname">First Name:-</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name..">
				<br>
				<label for="lname">Last Name:-</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name..">
				<br>
				<label for="pcode">Pincode   :-</label>
				<input type="text" id="pcode" name="pcode" placeholder="Enter pincode">
				<br>
				<label for="subject">Subject</label><br>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:180px"></textarea>
				<br>
				<label for="upload_image">Upload Image</label>
			
				<input type="file" name="image" accept="image/*">
				<br><br>
				<input type="submit" value="Submit" name="user_complaint" class="btn" >
			  </form>
		</div>
		
		
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>
