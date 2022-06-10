<?php
include "connection.php";
// echo $_POST['username'];
// echo $_POST['password'];
if(isset($_POST['username'])){

    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from details where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            echo "successfully loggedin";
            header('Location: index.html');
        
        }else{
            echo "Invalid username and password";

        }

    }

}
else{
    echo "there is no value with but_submit as key";
}
?>