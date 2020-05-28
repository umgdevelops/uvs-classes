<?php
include("dbConn.php");

$sql = "SELECT * FROM student";
$result = mysqli_query($link,$sql);
$data = array();
while($row=mysqli_fetch_assoc($result)){
    $data[] = $row;
}
echo json_encode($data);

?>