<?php include("dbConn.php");

$regEmail = $_POST["registerEmail"];
$regUser = $_POST["registerUsername"];
$createPass = $_POST["createPassword"];
$confirmPass = $_POST["confirmPassword"];
// var_dump($_POST);

if( ($_POST['registerEmail']=="") || ($_POST['registerUsername']=="") || ($_POST['createPassword']=="") || ($_POST['confirmPassword']=="") ) {
    echo "No blanks allowed!!!";
}
else{
    $sql = "SELECT * FROM users WHERE email='$regEmail'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo "Email already registered!!";
    }
    else{
        $sql = "SELECT * FROM users WHERE username='$regUser'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo "Username taken!!";
        }
        elseif($createPass != $confirmPass){
                echo "Password doesn't match";
            }
        else{
            $storePass = md5($createPass);
            print_r($storePass);
            $sql = "INSERT INTO users(username, email, passwordFor) VALUES('{$_POST["registerUsername"]}', '{$_POST["registerEmail"]}' , '{$_POST["createPassword"]}')";
            // echo "hello";
            if ($conn->query($sql) === TRUE) {
                echo "Registered successfully";
            } else {
                echo "Error creating table: " . $conn->error;
            }
        }
    }
}

?>