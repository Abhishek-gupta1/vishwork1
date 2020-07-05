<?php
include("config.php");
$query="select * from testlist";
$result=mysqli_query($con,$query);
?>

<html>
<head>
<title></title>
</head>
<body>
<form method="POST" action="">
<center><h1>Create new test list</center></h1>
Create_test:<input type="text" name="new_test"><br><br>

<input type="submit" name="submit"><t><t>
<button type="submit" name="update">EDIT</button>
</form>
</body>
</html>

<html>
<head>
<title>Fetching test data</title>
</head>
<body>
    <table align="center" border="1px" style="width:600px; line-height:40px;">
         <tr>
            <th colspan="3"><h2>Test Details</h2></th>
         </tr>
         <t>
            <th>id</th>
            <th>Create_test</th>
         </t>
    <?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>

           <tr>
               <td><?php echo $rows['id']; ?></td>
               <td><?php echo $rows['Create_test']; ?></td>
               <td><a href="Edittestnames.php?id=<?php echo $rows['id']; ?>" type="submit" class="btn btn-success">Edit</a></td>
           </tr>

    <?php
        }
    ?>
    </table>
</body>
</html>

<?php
include_once("config.php");
if(isset($_POST['submit'])) {
    $test_list = $_POST['new_test'];

    $sql = "Insert into testlist (Create_test) values('$test_list')";
    $result = mysqli_query($con,$sql);

    if($result) 
    {
        echo 'Data inserted';

    }
    else {
        echo 'Data not inserted';
    }
}

?>
