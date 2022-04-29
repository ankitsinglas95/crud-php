<?php

include('connection.php');
$sql="select * from register order by id desc";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--style sheet-->
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<title>show-data</title>
    
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <h3 text-align="center"> Show Data</h3>
        	  <table class="table ">
           
						 <thead>
							<tr>
							   <th>ID</th>
							   <th>Name</th>
							   <th>Age</th>
							   <th>City</th>
							   <th>Action</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res))
                            {
                                ?>
							<tr>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['age']?></td>
							   <td><?php echo $row['city']?></td>

							   <td>
							<a class="btn btn-danger" href='delete.php?id=<?php echo $row['id']; ?>'>Delete</a><a class="btn btn-ifoo" href='update.php?id=<?php echo $row['id']; ?>'>Edit</a>
							
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
</div>
</div>
</body>
</html>