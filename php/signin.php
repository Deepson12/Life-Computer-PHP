<?php 
require_once('connection.php');

if(isset($_POST["lifeappend"])) {
    $Username = $_POST['logusername'];
    $password = $_POST['logpassword'];

    if($Username == "" || $password == "") {
        echo "empty";
    }else{
        $sql = "SELECT * FROM liferegistration where Username='$Username' and Password='$password'";

       $data =  mysqli_query($con,$sql);
       if(mysqli_num_rows($data)== 1){
        echo "login success";
        session_start();

        $_SESSION['lifecomputer'] = $Username;

       }else{
           echo "wrong username";
       }
    }
}else{
    echo "failed";
}



?>