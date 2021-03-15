<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'./gip/website/includes/dbh.php';

$response = array('');

$id = mysqli_real_escape_string($conn, $_POST['delete_id']);

$sql = "DELETE FROM `data` WHERE `id` = '$id'";
mysqli_query($conn, $sql);
$response[0] = 'refresh';
$response[1] = 'no';
echo json_encode($response);

 ?>
