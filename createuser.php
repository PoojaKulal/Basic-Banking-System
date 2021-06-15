<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/createuser.css">
</head>
<body style="background-color:rgb(21, 65, 90);"></body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='index.html';
                     </script>";
                    
    }
  }
?>

<h1 class="text-center pt-4" style="color : white">Create a User</h1>
<br>

<div class="background">
<div class="container">
<div class="screen">
<div class="screen-header">
<div class="screen-header-right">
  <div class="screen-header-ellipsis"></div>
  <div class="screen-header-ellipsis"></div>
  <div class="screen-header-ellipsis"></div>
</div>
</div>
<div class="screen-body">
<div class="screen-body-item left">
  <img class="img-fluid" src="img/user3.png" style="border: none; border-radius: 50%;">
</div>
<div class="screen-body-item">
  <form class="app-form" method="post">
    <div class="app-form-group">
      <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
    </div>
    <div class="app-form-group">
      <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
    </div>
    <div class="app-form-group">
      <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
    </div>
    <br>
    <div class="app-form-group button">
      <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
      <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>