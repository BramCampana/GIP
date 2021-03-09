<?php
session_start();
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$function = $_SESSION['function'];
$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'/includes/dbh.php';
 ?>
<!DOCTYPE html>

<html lang="" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Bram Campana">
  <title>SmartCheck</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/67e995782d.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>
<body>
<div class="landingpage">
  <header class="intro">
    <div class="header">
      <div class="title">
        <h1>Smartcheck</h1>
      </div>
      <div class="inner_header">
        <ul class="navigation">
          <a href="index.php">
            <li>Home</li>
          </a>
          <a href="./contact.php">
            <li >Contact</li>
          </a>
          <a href="GIP">
            <li>GIP</li>
          </a>

          <?php if ($firstname): ?>
            <a href="./includes/logout.php">
              <li>Logout</li>
            </a>
          <?php else: ?>
            <a href="./login.php">
              <li>Login</li>
            </a>
          <?php endif; ?>
          <?php if ($firstname): ?>
            <a href="profile.php">
            <li>Profile</li>
              </a>
          <?php endif; ?>

        </ul>
      </div>
    </div>
    <?php if ($firstname): ?>

    <div class="welcome">
      <h1>Welcome</h1><p><?php echo "$firstname $lastname"; ?> (Den Haag, 14 februari 1967) is een Nederlands politicus. Sinds 14 oktober 2010 is hij minister-president van Nederland en minister van Algemene Zaken.</p>
    </div>
    <?php else: ?>
    <div class="welcome">
      <h1>Welcome</h1><p> Mark Rutte (Den Haag, 14 februari 1967) is een Nederlands politicus. Sinds 14 oktober 2010 is hij minister-president van Nederland en minister van Algemene Zaken.</p>
    </div>
    <?php endif; ?>
  </header>

</div>

</body>

</html>
