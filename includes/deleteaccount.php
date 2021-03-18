<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'./includes/dbh.php';

$response = array();

$mail = $_POST['mail'];
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM `registration` WHERE `email` = '$mail' LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (password_verify($password, $row['password']) & $mail = 'email') {

  $response[] = 'delete';

  $sql="DELETE FROM `registration` WHERE `email` ='$mail'";
  mysqli_query($conn, $sql);

} else {
  $response[] = 'Gebruikersnaam of wachtwoord komen niet overeen';
}
echo json_encode($response);

?>
