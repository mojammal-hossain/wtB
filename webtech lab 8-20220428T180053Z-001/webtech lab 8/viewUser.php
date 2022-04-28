<!DOCTYPE html>    
<html>    
<head>    
    <title>View User</title>
    <link rel="stylesheet" type="text/css" href="stylesheets/mystyle.css">          
</head>    
<body>

	<div>
		<header><h1>Tourism Management System</h1>
			<hr>
		</header>
		<table>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Mobile No</th>
			<th>Address</th>	
			</tr>
			<?php include 'db_connection\connection_viewUser.php';?>
		</table>
		<a href="php_validation/logout.php">Logout</a>
		<hr>
		
		</div>



<div class="footer">
  <p>&copy; Copyright by owner</p>
</div>
	 
</body>    
</html>   