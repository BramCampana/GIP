<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  </head>
  <body>

<div class="landingpagereg">
  <header class="intro">

<form method="post" id="login">
  <div class="inputBox">

  <div class="inputs">
    <input placeholder="e-mail"  class="input" type="email" name="mail" value=""id="e-mail" required>
    <input placeholder="password" class="input" type="password" name="password" value="" id="password" required>
</div>
<div class="checkBox">
  <div class="radio-tile-group">
    <input id="Submit" class="radio-tile-label input-container radio-button" value="Login" type="submit" name="submit"/>
  </div></div>
    <a href="registratie.php">Create account</a>
  </div>
</form>

</div>
</header>
  </body>
  <script type="text/javascript">
  function logout(){
       console.log('uitloggen');
       $.ajax({
         url: "./includes/logout.php",
         method: "POST",
         data: {},
         success: function(html){
           console.log('uitloggen2');
           location.reload();
         }
       })
     }

     $('#login').on('submit', function(e){
         e.preventDefault();
         console.log('U hebt op de login knop gedrukt');
         $.ajax({
           url: "./includes/logincon.php",
           method:"POST",
           data: new FormData(this),
           contentType: false,
           dataType: 'json',
           processData: false,
           success: function(data){
             console.log(data);
             if (data[0] === 'dgdg') {
               window.location.href = '/index.php';
             }  else {
               console.log(data);

             }

           }
         })
       })

  </script>
</html>
