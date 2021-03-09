<?php
session_start();
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$telnr = $_SESSION['telnr'];
$mail = $_SESSION['email'];
$function = $_SESSION['function'];
$path = $_SERVER['DOCUMENT_ROOT'];
include $path.'/includes/dbh.php';
 ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Bram Campana">
    <title>Profile</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/67e995782d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  </head>
  <body>
    <div class="landingpagereg">
      <header class="intro">
        <div class="inputBox">
          <div class="inputs">
            <form method="post" id='createForm' action="" >
              <div>
                <input class="input" placeholder="Firstname" type="text" name="firstname" autocomplete="off" value="<?php echo @$firstname; ?>" >
              </div>
              <div>
                <input class="input" placeholder="Lastname" type="text" name="lastname" autocomplete="off" value="<?php echo @$lastname; ?>">
              </div>
              <div>
                <input class="input" placeholder="E-mail" type="email" name="mail" autocomplete="off" value="<?php echo @$mail; ?>" >
              </div>
              <div>
                <input class="input" placeholder="Tel" type="text" name="telnr" autocomplete="off" value="<?php echo @$telnr; ?>" >
              </div>


            </div>
            <div class="checkBox">
              <div class="radio-tile-group">
                <input id="Submit" class="radio-tile-label input-container radio-button" value="save" type="submit" name="submit" />
              </div>

            </div>
            </form>
        </div>
    </div>
      </header>

  </body>
</html>
