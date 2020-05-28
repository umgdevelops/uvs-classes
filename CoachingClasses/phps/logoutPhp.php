<?php

session_start();
// echo "before delete";
// print_r($_SESSION);
unset($_SESSION['username']);
unset($_SESSION['password']);
$_SESSION['valid'] = false;
// echo "after delete";
// print_r($_SESSION);
header("location: http://localhost/FinalTutions/index.php");

?>