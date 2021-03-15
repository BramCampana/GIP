<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'/gip/website/includes/dbh.php';

$response = array('');

$id = mysqli_real_escape_string($conn, $_POST['id']);
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$mail = mysqli_real_escape_string($conn, $_POST['mail']);
$telnr = mysqli_real_escape_string($conn, $_POST['telnr']);
$rfid = mysqli_real_escape_string($conn, $_POST['rfid']);

// $response[] = $id;
// $response[] = $firstname;
// $response[] = $lastname;
// $response[] = $mail;
// $response[] = $telnr;
// $response[] = $rfid;
// echo json_encode($response);

$sql = "UPDATE `registration` SET
`firstname`= '$firstname',
`lastname` = '$lastname',
`email` = '$mail',
`tel` = '$telnr',
`rfid` = '$rfid'
WHERE `id` = '$id'";
mysqli_query($conn, $sql);
// $numrows = mysql_num_rows($result);

$response[0] = 'refresh';
$response[1] = 'no';
$response[] = $firstname;
$response[] = $id;
// $response[] = $numrows;
echo json_encode($response);

?>
