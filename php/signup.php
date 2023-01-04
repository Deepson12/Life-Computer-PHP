<?php 

require_once('connection.php');

if(isset($_POST['mylife'])){
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$sql = "INSERT INTO liferegistration values('".$Username."','".$Email."','".$Password."')";

if(mysqli_query($con,$sql)){
}else{

}
}else{
    echo "Oops something went wrong!!! Try signin again";
}
?>