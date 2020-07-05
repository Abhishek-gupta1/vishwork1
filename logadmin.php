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
       <div class="container-fluid">
           <div class="row">
               <div style="background-color: #000; width: 100%; height: 40px;">
                   <h1 style="color: white; text-align: center;"> ADMIN PANEL</h1>  
               </div>
           </div>
       </div>  
       <div class="container mt-4">
           <div class="row">
               
               <div class="col-lg-6" style="padding: 10px;">
                   <h2 style="text-align: center; margin-top: 20px;">Admin Login</h2>
                   
                   
                   <form action="" style="background-color: lightgreen; padding: 20px; margin: 20px; padding-top: 20px; width: 500px; height: 350px; margin-top: 50px;" method="post">
                     
                       <div class="form-group">
                     
                           <label>Username:</label>
                           <input type="text" name="user"  class="form-control" placeholder="Enter your username"><br>
                           <div id="nameerror" style="color: red;"></div>
                       </div>
                       
                       <div class="form-group">
                           <label>Password:</label>
                           <input type="password" name="pwd"  class="form-control" placeholder="Enter your password"><br><br>
                           <div id="passerr" style="color: red;"></div>
                       </div>
                       
                        <div style="text-align: center;">
                            <button type="submit" id="loginbtn" class=" btn btn-primary" name="submit"> Login </button>
                        </div>                        
                   </form>
                 </div>
              </div>
           </div>
</body>
</html>

<!--<html>
<head>
<title></title>
</head>

<body>
<center> 
  <h1> Admin login</h1>
<form action="" method="POST">
   <table>
       <tr>
          <td>Username:<input type="text" name="user" placeholder="Enter your username"></td>
       </tr>
       <tr>
          <td>Password:<input type="password" name="pwd" placeholder="Enter your password"></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
     </table>
 </form>
 </center> 
 </body>
 </html>-->


 <?php
 if(isset($_POST["submit"])){
  $name = $_POST["user"];
  $password = $_POST["pwd"];

  $sql = "SELECT * FROM `admin_login` WHERE `admin_username`='$name' AND `adim_password`=$password";
  $result = mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0){
    $data = mysqli_fetch_assoc($result);
    $_SESSION["id"] = $data["id"];
     $_SESSION["name"] = $data["admin_username"];
    header("Location:dashboard.php");
}else{
  echo $message = "Name And Password does not Match";
}

}
 ?>



