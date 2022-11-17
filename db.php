<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "form";
$conn = mysqli_connect($server,$user,$pass,$dbname);

//echo ($conn)?"connection ok":"connection failed";

if(isset($_POST['register'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pos = $_POST['posi'];
    $gen = $_POST['gen'];

    $query = "INSERT INTO DATAS VALUES('$fname','$lname','$pos','$gen')";

    $data = mysqli_query($conn,$query);

    //echo ($data)?"data insert":"data not insert";
  

}

   
?>