<?php
include("config.php");
$query="select * from question";
$result=mysqli_query($con,$query);

?>

<html>
<head>
<title>Fetching question data</title>
</head>
<body>
    <table align="center" border="1px" style="width:1200px; line-height:80px;">
         <tr>
            <th colspan="5"><h2>Questions list</h2></th>
         </tr>
         <t>
            <th>Question</th>
            <th>Option1</th>
            <th>Option2</th>
            <th>Option3</th>
            <th>Option4</th>
         </t>
    <?php
        while($rows=mysqli_fetch_assoc($result))
        {
    ?>

           <tr>
               <td><?php echo $rows['Question']; ?></td>
               <td><?php echo $rows['Option1']; ?></td>
               <td><?php echo $rows['Option2']; ?></td>
               <td><?php echo $rows['Option3']; ?></td>
               <td><?php echo $rows['Option4']; ?></td>
           </tr>

    <?php
        }
    ?>
    </table>
</body>
</html>