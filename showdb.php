<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
   
   th,td{
    border:1px solid black;

   }
   th{
      background:black;
      color:white;
   }
</style>
<body>
    
</body>
</html>




<?php include 'db.php';?>
<?php
error_reporting(0);
$query="SELECT * FROM DATAS";
$data=mysqli_query($conn,$query);
$row=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);


/*echo $result['fname']." ";
echo $result['lname']." "; 
echo $result['position']." ";
echo $result['gender']." "; */

//echo $row;
if($row != 0){

    ?>
           <h2 align="center"><mark>database records</mark></h2>
           <center>
           <table border="1" cellspacing="7">
             <tr>
               <th>First name</th>
               <th>Last  name</th>
               <th>Position</th>
               <th>Gender</th>
          </tr>
    <?php
    
    while($result=mysqli_fetch_assoc($data)){
    
       echo" <tr>
        <td>".$result['fname']."</td>
        <td>".$result['lname']."</td>
        <td>".$result['position']."</td>
        <td>".$result['gender']."</td>
        </tr>";
        
        
            }
   
}
else{
    echo 'table has no records';
}


?>
</table>
</center>
