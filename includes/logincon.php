<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'./includes/dbh.php';



$mail = $_POST['mail'];
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM `registration` WHERE `email` = '$mail' LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (password_verify($password, $row['password'])) {
  session_start();
  $_SESSION['firstname'] = $row['firstname'];
  $_SESSION['lastname'] = $row['lastname'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['telnr'] = $row['tel'];
  $_SESSION['id'] = $row['id'];


  $Array[0] = 'dgdg';
} else {
  $Array[0] = 'Gebruikersnaam of wachtwoord komen niet overeen';
}
echo json_encode($Array);
 ?>
