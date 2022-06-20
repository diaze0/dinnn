<?php
include 'config.php';
@$firstname = $_POST['firstname'];
@$lastname = $_POST['lastname'];
@$phone = $_POST['phone'];
@$email = $_POST['email'];
@$message = $_POST['message'];

// extract($_POST);
if(isset($_POST['submit'])){

$sql = "INSERT INTO `contactdata`(`firstname`, `lastname`, `phone`, `email`, `message`) VALUES ('$firstname','$lastname',$phone,'$email','$message')";
// $result = $mysqli->query($sql);
mysqli_query($conn, $sql);
// if(!$result){
//     die("Couldn't enter data: ".$mysqli->error);
// }
// echo "Thank You For Contacting Us ";
// $mysqli->close();
 }
?>