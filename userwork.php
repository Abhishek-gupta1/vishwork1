<?php
session_start();
error_reporting(0);
if(isset($_SESSION["id"]) AND isset($_SESSION["name"])) {
    echo  '<html>
           <head>
           <title>Simple dropdown menu list of Student panel using HTML and CSS</title>
           <link href="mystyle.css" rel="stylesheet" type="text/css">
           </head> 

     <body>
    <center><strong>WELCOME TO STUDENT PANEL</strong></center>
    <strong>STUDENT MENU</strong>

      <ul>
          <li><a href="CSEtest1.html">Test</a>
              <ul>
                  <li><a href="">Add List</a></li>
              </ul>
          </li>
          <div>
            <a href="userlogout.php">
            LOGOUT
             </a>
          </div>
</body>
</html>';
}

else {
      header("Location:userlogin.php");
    }
?>

<!--<html>
<head>
      <title>Simple dropdown menu list of Student panel using HTML and CSS</title>
      <link href="mystyle.css" rel="stylesheet" type="text/css">
</head>
<body>
	  <center><strong>WELCOME TO STUDENT PANEL</strong></center>
    <strong>STUDENT MENU</strong>

      <ul>
          <li><a href="CSEtest1.html">Test</a>
              <ul>
                  <li><a href="">Add List</a></li>
              </ul>
          </li>
          <div>
            <a href="userlogout.php">
            LOGOUT
             </a>
          </div>
</body>
</html>-->





