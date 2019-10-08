<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		a:link, a:visited {
  background-color: #F50324;
  color: white;
  font-size: 15px;
  width:48%;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 5px;
}
	</style>
</head>
<body>

<div class="header1">
	<h2><h2>
</div>
<div class="section">
	<div class="nav">
	</div>
	<div class="article">
		<div class="content1">
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
				<p style="width:100%;font-size:20px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
				
				<div class="container1">
					  <form action="index.php" method="post" class="content1">
						<div class="input-group">
							<label for="fname">First Name:-</label>
							<input type="text" id="fname" name="firstname" placeholder="Your name..">
							<br>
						</div>
						<div class="input-group">
							<label for="lname">Last Name:-</label>
							<input type="text" id="lname" name="lastname" placeholder="Your last name..">
							<br>
						</div>
						<div class="input-group">
							<label for="pcode">Pincode   :-</label>
							<input type="text" id="pcode" name="pcode" placeholder="Enter pincode">
							<br>
						</div>
						<div class="input-group">
							<label for="subject">Subject</label>
							<textarea id="subject" name="subject" placeholder="Write something.." style="height:90px;width:93%;"></textarea>
							<br>
						</div>
				
							<label for="upload_image">Upload Image</label><br>					
							<input type="file" name="image" >
							<br><br>
						
						
							<input type="submit" value="Submit" name="user_complaint" class="btn" >
						
						<a href="login.php?logout='1'" style="color: white;">logout</a>
					  </form>
				</div>		
				
				</div>
			<?php endif ?>
		</div>
	</div>
</div>
</body>
</html>
