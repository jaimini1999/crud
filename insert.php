<?php

include 'conn.php';
if(isset($_POST['done']))

{
$username=$_POST['username'];
$password=$_POST['password'];
$q="INSERT INTO `crudtable`(`username`, `password`) VALUES ('$username' , '$password')";

$query=mysqli_query($con,$q);

header('location:display.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="col-lg-6 m-auto">
  <form method="post"
<br><br><div class="card">
<div class="card-header bg-dark blue">
<h1 class="text-white text-center">Insert Operation </h1>
  </div><br>

      <label>Username: </label>
      <input type="text" name="username" class="form control"><br><br>

    <label>Password: </label>
      <input type="text" name="password" class="form control"><br><br>
 

<button class="btn btn-success" type="submit" name="done"> submit </button><br>

</div>
</form>
</div>
</body>
</html>
