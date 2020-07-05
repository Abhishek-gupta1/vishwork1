<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script>
    function valcheck() {
         
        var errormessage = "";

        if(document.getElementById('Name').value =="") {
            errormessage+= "Name is required \n";
            document.getElementById('Name').style.bordercolor="red";
           }


        if (document.getElementById('Age').value =="") {
            errormessage+= "Age is required \n";
            document.getElementById('Age').style.bordercolor="red";
            }

        if (document.getElementById('Email').value =="") {
            errormessage+="Email is required \n";
            document.getElementById('Email').style.bordercolor="red";
            }
            

        if (document.getElementById('Contact').value =="") {
            errormessage+="Contact number is required \n";
            document.getElementById('Contact').style.bordercolor="red";
            }


        if (document.getElementById('Address').value =="") {
            errormessage+="Address is required \n";
            document.getElementById('Address').style.bordercolor="red";
            } 
         
        if (errormessage !="") {
            alert(errormessage);
            return false;
        }
    
  }

    </script>

</head>
<body>

<div class="container">
<div class="col-lg-5">
    <h2>Student Details</h2>
    <form action="" name="form1" method="post" onsubmit="return valcheck()">
       <div class="form-group">
         <label for="Name">Name</label>
         <input type="text" name="name" id="Name" class="form-control" placeholder="Enter your name">
        </div>
        <div class="form-group">
        <label for="Age">Age</label>
        <input type="text" name="age" id="Age" class="form-control" placeholder="Enter your age">
        </div>
        <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" name="email" id="Email" class="form-control" placeholder="Enter your email">
        </div>
        <div class="form-group">
        <label for="Contact_no">Contact_no</label>
        <input type="text" name="contact_no" id="Contact" class="form-control" placeholder="Enter your contact number">
        </div>
        <div class="form-group">
        <label for="Address">Address</label>
        <input type="text" name="address" id="Address" class="form-control" placeholder="Enter your address">
        </div>
        <button type="submit" class="btn btn-primary" name="insert">Insert</button>
        <button type="submit" class="btn btn-primary" name="update">Edit</button>
    </form>
</div>
</div>
<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
    <tr>
            <th colspan="7"><h2>Student Record</h2></th>
         </tr>
         <t>
         <th>#</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Contact_no</th>
            <th>Address</th>
            <th>Update</th>
         </t>
     </thead>
     <tbody>

       <?php
           // include("config.php");
           $query="select * from users";
           $result=mysqli_query($con,$query);
           while($rows=mysqli_fetch_assoc($result))
        {
    ?>

           <tr>
               <td><?php echo $rows['id']; ?></td>
               <td><?php echo $rows['name']; ?></td>
               <td><?php echo $rows['age']; ?></td>
               <td><?php echo $rows['email']; ?></td> 
               <td><?php echo $rows['contact_no']; ?></td>
               <td><?php echo $rows['address']; ?></td>
               <td><a href="Dataedit.php?id=<?php echo $rows['id']; ?>" type="submit" class="btn btn-success">Edit</a></td>
           </tr>

    <?php
        }
    ?>

    </tbody>
  </table>

</div>


</body>
</html>


<?php

  if(isset($_POST['insert']))
{    
     // echo "input is coming";
      $name = $_POST['name'];
      $age = $_POST['age'];
      $email = $_POST['email'];
      $contact_no=$_POST['contact_no'];
      $address=$_POST['address'];

   // var_dump("INSERT INTO users(name,age,email,contact_no,address) VALUES('$name','$age','$email','$contact_no','$address')"); exit();

      $sql = "INSERT INTO users(name,age,email,contact_no,address) VALUES('$name','$age','$email','$contact_no','$address')";

    $result = mysqli_query($con,$sql);
    
    ?>
      <script type="text/javascript">
      window.location.href=window.location.href;
      </script>

    <?php
}

      
?>