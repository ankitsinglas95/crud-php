<?php
include('connection.php');

if (isset($_POST['update']))
{
  $name = $_POST['name'];
  $age = $_POST['age'];
  $city = $_POST['city'];
  
  // write the update query
  $sql = "UPDATE `register` SET `name`='$name',`age`='$age',`city`='$city' ";

  // execute the query
  $result = $con->query($sql);

  if ($result == TRUE) {
    echo "Record updated successfully.";
  }else{
    echo "Error:" . $sql . "<br>" . $con->error;
  }
}

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
$id = $_GET['id'];

// write SQL to get user data
$sql = "SELECT * FROM `register` WHERE `id`='$id'";

//Execute the sql
$result = $con->query($sql);

if ($result->num_rows > 0) {
  
  while ($row = $result->fetch_assoc()) {
    $name = $row['name'];
    $age = $row['age'];
    $city = $row['city'];
    
  }
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
<title>update</title>
    
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">

   <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
     <div class="form-group">
         <label > Name:</label>
         <input type="text" name="name" class="form-control" id="" value="<?php echo $name; ?>" >
     </div>
     <div class="form-group">
         <label> Age:</label>
         <input type="tele" name="age" class="form-control" id="" value="<?php echo $age ?>" >
     </div>
     <div class="form-group">
         <label> City:</label>
         <input type="text" name="city" class="form-control" id="" value="<?php echo $city ?>" >
     </div>
     <div class="form-group">
     <button class="btn btn-success" type="submit" name="update" >update</button>
     
     
</div>
   </form>
</div>
</div>
</body>
</html>
<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: showdata.php');
	}

}
?>