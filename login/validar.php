<?php
session_start();
include '../includes/conn.php';

$email=$_POST['email'];
$password=md5($_POST['password']);
$sql="SELECT * FROM utilizador WHERE email='$email' AND password='$password'";
$result = $con->query($sql);

if ($result->num_rows == 1) {
  // output data of each row
  $response = array('success' => true);
} else {
    $response = array('success' => false);
}

header('Content-Type: application/json');
echo json_encode($response);
?>