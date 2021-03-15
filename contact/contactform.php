<?php

  if (isset($_POST['submit'])) {
    $mail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "jelle.henau@provil.be";
    $headers = "From: ".$mailFrom;
    $txt = "We hebben een e-mail gekregen van ".$mail.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
  }

?>
