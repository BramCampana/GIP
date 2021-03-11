<?php

 session_start();
 $path = $_SERVER['DOCUMENT_ROOT'];
 include $path.'./includes/dbh.php';

 $response = array();

 $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
 $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
 $telnr = mysqli_real_escape_string($conn, $_POST['telnr']);
 $mail = mysqli_real_escape_string($conn, $_POST['mail']);
 $id = mysqli_real_escape_string($conn, $_POST['id']);


 $sql = mysqli_query($conn,$select);
 $row = mysqli_fetch_assoc($sql);

 $sql = "UPDATE `registration` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$mail', `tel` = '$telnr'  WHERE `id` = '$id' ";
 mysqli_query($conn, $sql);

 $_SESSION['firstname'] = $firstname;
 $_SESSION['lastname'] = $lastname;
 $_SESSION['email'] = $mail;
 $_SESSION['telnr'] = $telnr;
 $_SESSION['id'] = $id;

 $response[] = $firstname;
 $response[] = $lastname;
 $response[] = $telnr;
 $response[] = $mail;
 $response[] = $id;




 echo json_encode($response);

?>
