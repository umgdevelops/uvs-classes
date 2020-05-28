<?php 
ob_start();
session_start();
$user = $_POST['loginId'];
$pass = $_POST['loginPassword'];
if( ($user == "") || ($_POST['loginPassword'] == "") ){
    echo "Enter all details!!!";
}
else{
    include('dbConn.php');
    $pass = md5($pass);
    $sql = "SELECT contact,passwordFor FROM parent WHERE contact='$user' AND pass='$pass'";
    $result = mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if($count > 0){
        echo "Error!!!";
    }
    else{
        echo "hello";
        $sql = "SELECT * FROM parent WHERE contact='$user' AND pass='$pass'";
        $result = mysqli_query($link,$sql);
        $row=mysqli_fetch_assoc($result);
   
        // create session for the user
        echo "LOGGED IN!!!!!!";
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $user;
        header("location:http://localhost/FinalTutions/pages/studentPage.php");
    }
}

?>