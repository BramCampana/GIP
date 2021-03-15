<?php
  //session_start();
  // $user = $_SESSION['user'];
  // echo 'De user is: '.$user;
  $path = $_SERVER['DOCUMENT_ROOT'];
  include $path.'./gip/website/includes/dbh.php';
 ?>
<!DOCTYPE html>
<html lang="" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Jelle Henau">
  <title>SmartCheck</title>
  <link rel="stylesheet" href="../../css/style.css">
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
          <a href="../../index.php">
            <li>Home</li>
          </a>
          <a href="../../contact/contact.php">
            <li>Contact</li>
          </a>
          <a href="GIP">
            <li>GIP</li>
          </a>
          <a href="../../login.php">
            <li>Login</li>
          </a>

        </ul>
      </div>
    </div>

    <div class="buttonBox">
      <button onclick="document.location='../accounts/accountsTable.php'" class="button buttonAccounts">Accounts</button>
      <button onclick="document.location='./dataTable.php'" class="button buttonData">Data</button>
    </div>
    <table id="customers">
      <tr>
        <th>id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Tijd & datum</th>
        <th>RFID-badge</th>
        <th>QR-code</th>
        <th>Temperatuur</th>
        <th>Status</th>
        <th></th>
      </tr>

      <?php
        $sql = "SELECT * FROM `data`";
        $results = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($results)) {
            echo '<tr>
              <td>'.$row['id'].'</td>
              <td>'.$row['firstname'].'</td>
              <td>'.$row['lastname'].'</td>
              <td>'.$row['time'].'</td>
              <td>'.$row['rfid'].'</td>
              <td>'.$row['qrcode'].'</td>
              <td>'.$row['temp'].'</td>
              <td>'.$row['status'].'</td>
              <td><button class="button buttonDelete" onclick="del('.$row['id'].')">Delete</button></td>
            </tr>';
        }
      ?>

      </table>

      <script type="text/javascript">

        //Functie delete
        function del(id){
        $.ajax({
          url: "./includes/delete.php",
          method: "POST",
          data: {delete_id:id},
          success:function(data){
              location.reload()
            }
        })
        }
        </script>
    </header>

</div>

</body>

</html>
