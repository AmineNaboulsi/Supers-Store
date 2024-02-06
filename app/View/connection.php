<?php 
$localhost ="localhost";
$user = "root";
$password = "";
$databasename = "ecom";


$con = new mysqli($localhost,$user,$password,$databasename);
if($con == mysqli_connect_error()){
    echo "<script>
    console.log('faild');
    </script>";
}

?>