<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM 'crud' WHERE id=$id ";
$result=mysqli_query($conn,$sql);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];
  $sql="UPDATE `crud` SET `name` = '$name' WHERE `crud`.`id` = '$id' ";
  $result=mysqli_query($conn,$sql);
  if($result){
    header('location:display.php');
  }
  else{
    die(mysqli_error($conn));
  }
}


?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" value=<?php echo $name;?>>
</div>
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" value=<?php echo $email;?>>
</div>
<div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" value=<?php echo $mobile;?>>
</div>
<div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" value=<?php echo $password;?>>
</div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
</div>
  </body>
</html>