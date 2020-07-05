 <?php
 include("config.php");
 $id=$_GET['id'];

 $sql="select * from users where id=$id";
 $link=mysqli_query($con,$sql);
 $rows=mysqli_fetch_assoc($link);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>

<div class="container">
<div class="col-lg-5">
    <h2>Student Details</h2>
    <form action="" name="form1" method="post">
        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
        <div class="form-group">
         <label for="Name">Name</label>
         <input type="text" name="name" class="form-control" value="<?php echo $rows['name']; ?>">
        </div>
        <div class="form-group">
        <label for="Age">Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $rows['age']; ?>">
        </div>
        <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $rows['email']; ?>">
        </div>
        <div class="form-group">
        <label for="Contact_no">Contact_no</label>
        <input type="text" name="contact_no" class="form-control" value="<?php echo $rows['contact_no']; ?>">
        </div>
        <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" name="address" class="form-control" value="<?php echo $rows['address']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
</div>
</div>

</body>
</html>

<?php

    if(isset($_POST['update']))
{
          $id=$_POST['id'];
          $name = $_POST['name'];
          $age = $_POST['age'];
          $email = $_POST['email'];
          $contact_no=$_POST['contact_no'];
          $address=$_POST['address'];
          include("config.php");

        $sql = "UPDATE users SET name='$name', age='$age', email='$email', contact_no='$contact_no', address='$address' where id=$id";

          $res=mysqli_query($con,$sql);

          header("Location:index.php");


 }
 ?>