<!DOCTYPE html>
<html lang="" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Jelle Henau">
  <title>SmartCheck</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
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
          <a href="../index.php">
            <li>Home</li>
          </a>
          <a href="./contact.php">
            <li >Contact</li>
          </a>
          <a href="GIP">
            <li>GIP</li>
          </a>
          <a href="../login.php">
            <li>Login</li>
          </a>

        </ul>
      </div>
    </div>
    <form action="contactform.php" method="post">
      <div class="inputBox">
        <div class="inputs">
          <div class="input1">
            <input class="input" style="color: white" placeholder="email" type="mail" name="email" autocomplete="off" required>
          </div>
          <div class="input1">
            <input class="input" style="color: white" placeholder="subject" type="text" name="subject" autocomplete="off" required>
          </div>
          <div class="input2">
            <input class="input" style="color: white" placeholder="message" type="text" name="message" autocomplete="off" required>
          </div>
          <button class="button buttonAccounts" type="submit" name="submit">Send</button>
        </div>
      </div>
    </form>
  </header>

</div>

</body>

</html>
