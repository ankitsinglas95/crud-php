<?php
include('connection.php');
?>

<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--style sheet-->
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
<!-- javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<title>index</title>
    
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
<?php
  if(isset($_POST['save']))
  {
    $name=$_POST['name'];
    $age=$_POST['age'];
    $city=$_POST['city'];


    //write sql query
    $insert="insert into register (name,age,city) VALUES('$name','$age','$city')";
    // execute the query
    if(mysqli_query($con,$insert))
  {
  echo "<script>alert('data added')</script>";
  header('Location: showdata.php');
  }
  else
  {
  echo "error".mysqli_error($con);
  }
  }
?>
   <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
     <div class="form-group">
         <label > Name:</label>
         <input type="text" name="name" class="form-control" id="" value="" placeholder="enter name here...." required>
     </div>
     <div class="form-group">
         <label> Age:</label>
         <input type="tele" name="age" class="form-control" id="" value="" placeholder="enter age here...." required>
     </div>
     <div class="form-group">
         <label> City:</label>
         <input type="text" name="city" class="form-control" id="" value="" placeholder="enter city here...." required>
     </div>
     <div class="form-group">
     <button class="btn btn-success" type="submit" name="save" >Save</button>
     
     
</div>
   </form>
</div>
</div>

</body>
</html>