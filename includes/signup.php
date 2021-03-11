<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'./includes/dbh.php';

$response = array();

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$mail = mysqli_real_escape_string($conn, $_POST['mail']);
$telnr = mysqli_real_escape_string($conn, $_POST['telnr']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$function = mysqli_real_escape_string($conn, $_POST['function']);

$sql = "SELECT * FROM `registration` WHERE `email` = '$mail'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
$response[] = $resultCheck;
if ($resultCheck > 0) {
  $response[0] = 'This user already exist';
  $response[1] = 'no';
} else{
  $password = password_hash($password, PASSWORD_DEFAULT);
  $response[] = $firstname;
  $response[] = $lastname;
  $response[] = $mail;
  $response[] = $telnr;
  $response[] = $password;
  $response[] = $function;
  $sql = "INSERT INTO `registration`(`firstname`, `lastname`, `email`, `tel`, `password`, `function`, `rfid`) VALUES ('$firstname', '$lastname','$mail', '$telnr','$password','$function', 'gfdg')";
  mysqli_query($conn, $sql);
  $response[0] = 'Account created';
  $response[1] = 'yes';
}
echo json_encode($response);
?>
