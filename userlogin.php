<?php
session_start();
error_reporting(0);
include("config.php");
?>
<html>
   <head>
       <title></title>
       <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   </head>
   <body style="background-color: lightgrey;">
       <div class="container mt-4">
           <div class="row">
               <div style="background-color: #000; width: 100%; height: 40px;">
                   <h1 style="color: white; text-align: center;"> STUDENT PANEL</h1>  
               </div>
           </div>
       </div>  
            <div class="container mt-4">
           <div class="row">
             <div class="col-lg-6">
                  <h2 style="text-align: center; text-height: 500px; text-orientation: upright; margin-top: 30px;"> User Login </h2>
                   
                      <form style="background-color: lightblue; padding: 20px; margin: 20px; width: 500px; height: 350px; margin-top: 50px;" action="" method="post">
                       
                       <div class="form-group">
                           <label>Username:</label>
                           <input type="text"  name="username" class="form-control">
                           <div id="usererror" style="color:red;"></div>
                       </div>
                       
                       <div class="form-group">
                           <label>Password:</label>
                           <input type="password"  name="password" class="form-control">
                           <div id="passerror" style="color:red;"></div>
                       </div>
                       <div style="text-align: center;">
                       <button type="submit" id="loginbtn" class=" btn btn-primary" name="submit"> LOGIN </button>
                       </div>
                      </form>
                    </div>
                </div>
            </div>
</body>
</html>

<?php
 if(isset($_POST["submit"])) {
  $name = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM `student_login` WHERE `student_username`='$name' AND `student_password`=$password";
  $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0) {
    $data = mysqli_fetch_assoc($result);
    $_SESSION["id"] = $data["id"];
     $_SESSION["name"] = $data["student_username"];
    header("Location:userwork.php");
}else{
  echo $message = "Name And Password does not Match";
}

}
 ?>
